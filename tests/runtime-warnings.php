<?php

// Load only the real functions under test; requiring function.php would connect to a database.
function sourceFunction(string $source, string $name): string
{
    $tokens = token_get_all($source);
    for ($i = 0, $count = count($tokens); $i < $count; $i++) {
        if (!is_array($tokens[$i]) || $tokens[$i][0] !== T_FUNCTION) {
            continue;
        }
        $next = $i + 1;
        while (is_array($tokens[$next]) && $tokens[$next][0] === T_WHITESPACE) {
            $next++;
        }
        if (!is_array($tokens[$next]) || $tokens[$next][0] !== T_STRING || $tokens[$next][1] !== $name) {
            continue;
        }
        $code = '';
        $depth = 0;
        $body = false;
        for (; $i < $count; $i++) {
            $token = $tokens[$i];
            $code .= is_array($token) ? $token[1] : $token;
            if ($token === '{') {
                $body = true;
                $depth++;
            } elseif ($token === '}') {
                $depth--;
                if ($body && $depth === 0) {
                    return $code;
                }
            }
        }
    }
    throw new RuntimeException('Function not found: ' . $name);
}

function same($expected, $actual): void
{
    if ($expected !== $actual) {
        throw new RuntimeException('Expected ' . var_export($expected, true) . ', got ' . var_export($actual, true));
    }
}

function select(...$args)
{
    return $GLOBALS['selectedPanel'];
}

function sendmessage(...$args): void
{
    $GLOBALS['messages'][] = $args;
}

function step(...$args): void
{
    $GLOBALS['steps'][] = $args;
}

function update(...$args): void
{
    $GLOBALS['updates'][] = $args;
}

function clearSelectCache(...$args): void
{
}

error_reporting(E_ALL);
set_error_handler(static function ($severity, $message, $file, $line): never {
    throw new ErrorException($message, 0, $severity, $file, $line);
});

$functionSource = file_get_contents(__DIR__ . '/../function.php');
eval(sourceFunction($functionSource, 'formatBytes'));
eval(sourceFunction($functionSource, 'isBase64'));
eval(sourceFunction($functionSource, 'cancelPendingGatewayOrders'));
$textbotlang = [
    'common' => ['units' => ['byte' => 'B', 'kilobyte' => 'KB', 'megabyte' => 'MB', 'gigabyteAlt' => 'GB', 'terabyte' => 'TB']],
    'users' => ['status' => ['infoUnavailable' => 'Information unavailable', 'panelNotConnected' => 'Panel not connected']],
];

$indexSource = file_get_contents(__DIR__ . '/../index.php');
$lookupStart = '$marzban = select("marzban_panel", "*", "name_panel", $nameloc[\'Service_location\'], "select");';
$lookupEnd = '$DataUserOut = $ManagePanel->DataUser($nameloc[\'Service_location\'], $nameloc[\'username\']);';
$start = strpos($indexSource, $lookupStart);
$end = $start === false ? false : strpos($indexSource, $lookupEnd, $start);
if ($start === false || $end === false) {
    throw new RuntimeException('Service lookup branch not found');
}
$lookupSource = substr($indexSource, $start, $end + strlen($lookupEnd) - $start);
$lookup = eval('return static function ($nameloc, $ManagePanel, $textbotlang, $keyboard, $from_id) {' . $lookupSource . ' return $DataUserOut; };');

$tests = [
    'valid byte formats and precision stay compatible' => static function (): void {
        foreach ([0 => '0 B', 1 => '1 B', 1023 => '1023 B', 1024 => '1 KB', 1536 => '1.5 KB', 1048576 => '1 MB', 1572864 => '1.5 MB'] as $bytes => $formatted) {
            same($formatted, formatBytes($bytes));
        }
        same('1 KB', formatBytes('1024'));
        same('2 KB', formatBytes(1536, 0));
        same('0.5 B', formatBytes(0.5));
    },
    'negative or invalid byte values show zero without warnings' => static function (): void {
        foreach ([-1, -1073741824, null, false, true, 'invalid', [], new stdClass(), INF, -INF, NAN, '1e9999'] as $bytes) {
            same('0 B', formatBytes($bytes));
        }
    },
    'byte unit index stays in range for finite extremes' => static function (): void {
        same('1024 TB', formatBytes(1024 ** 5));
        same('0 B', formatBytes(PHP_FLOAT_MIN));
        $huge = formatBytes(PHP_FLOAT_MAX);
        if (!str_ends_with($huge, ' TB') || !is_finite((float) substr($huge, 0, -3))) {
            throw new RuntimeException('Large finite values must keep a finite TB result');
        }
    },
    'base64 accepts canonical strings and preserves the empty string result' => static function (): void {
        foreach (['hello', "\0binary\xff", ''] as $value) {
            same(true, isBase64(base64_encode($value)));
        }
        foreach (['%%%', 'https://example.invalid', 'aGVsbG8', "aGVsbG8=\n"] as $value) {
            same(false, isBase64($value));
        }
    },
    'base64 rejects null and non-string values without warnings' => static function (): void {
        foreach ([null, false, true, 123, 1.5, [], new stdClass()] as $value) {
            same(false, isBase64($value));
        }
    },
    'missing panel returns friendly message without panel access or historical repair' => static function () use ($lookup, $textbotlang): void {
        foreach ([null, false, [], ['name_panel' => null]] as $panel) {
            $GLOBALS['selectedPanel'] = $panel;
            $GLOBALS['messages'] = $GLOBALS['steps'] = $GLOBALS['updates'] = [];
            $manager = new class {
                public int $calls = 0;
                public function DataUser(...$args): array
                {
                    $this->calls++;
                    return ['status' => 'active'];
                }
            };
            same(null, $lookup(['Service_location' => 'removed-panel', 'username' => 'example-service'], $manager, $textbotlang, 'keyboard', 'example-user'));
            same(0, $manager->calls);
            same([], $GLOBALS['updates']);
            same([['example-user', 'Information unavailable', 'keyboard', 'html']], $GLOBALS['messages']);
            same([['home', 'example-user']], $GLOBALS['steps']);
        }
    },
    'existing panel still loads the service' => static function () use ($lookup, $textbotlang): void {
        $GLOBALS['selectedPanel'] = ['name_panel' => 'existing-panel'];
        $GLOBALS['messages'] = $GLOBALS['steps'] = $GLOBALS['updates'] = [];
        $manager = new class {
            public array $calls = [];
            public function DataUser(...$args): array
            {
                $this->calls[] = $args;
                return ['status' => 'active'];
            }
        };
        same(['status' => 'active'], $lookup(['Service_location' => 'existing-panel', 'username' => 'example-service'], $manager, $textbotlang, 'keyboard', 'example-user'));
        same([['existing-panel', 'example-service']], $manager->calls);
        same([['user', 'Processing_value_four', 'existing-panel', 'id', 'example-user']], $GLOBALS['updates']);
        same([], $GLOBALS['messages']);
    },
    'cancel keeps direct and legacy payment history while deleting only unrelated unpaid drafts' => static function (): void {
        global $pdo;
        $pdo = new Pdo\Sqlite('sqlite::memory:', null, null, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $pdo->createFunction('SUBSTRING_INDEX', static function ($value, $delimiter, $count) {
            if ($value === null || $delimiter === null) {
                return null;
            }
            if ($delimiter === '' || $count === 0) {
                return '';
            }
            $parts = explode($delimiter, $value);
            return implode($delimiter, $count > 0 ? array_slice($parts, 0, $count) : array_slice($parts, $count));
        }, 3);
        $pdo->exec('CREATE TABLE invoice (id_invoice TEXT PRIMARY KEY, id_user TEXT, username TEXT, Status TEXT, id_payment TEXT)');
        $pdo->exec('CREATE TABLE service_other (id TEXT PRIMARY KEY, id_user TEXT, username TEXT, status TEXT, id_payment TEXT)');
        $pdo->exec('CREATE TABLE Payment_report (id_order TEXT, id_user TEXT, id_invoice TEXT, payment_Status TEXT)');
        $insertPayment = $pdo->prepare('INSERT INTO Payment_report VALUES (?, ?, ?, ?)');
        foreach (['paid', 'expire', 'rejected', 'Unpaid', 'waiting'] as $status) {
            $insertPayment->execute(['payment-' . $status, 'someone-else', null, $status]);
        }
        foreach ([
            ['legacy-buy', 'example-user', 'getconfigafterpay|legacy-buy', 'paid'],
            ['legacy-extend', 'example-user', 'getextenduser|legacy-extend%old-order', 'paid'],
            ['legacy-volume', 'example-user', 'getextravolumeuser|legacy-volume%5', 'expire'],
            ['legacy-time', 'example-user', 'getextratimeuser|legacy-time%30', 'rejected'],
            ['wrong-user', 'other-user', 'getconfigafterpay|wrong-user', 'paid'],
            ['wrong-service-user', 'other-user', 'getextenduser|wrong-service-user%5', 'paid'],
            ['partial', 'example-user', 'getconfigafterpay|partial-name-longer', 'paid'],
            ['partial-service', 'example-user', 'getextenduser|partial-service-longer%5', 'paid'],
            ['wrong-prefix', 'example-user', 'unrelated|wrong-prefix%5', 'paid'],
        ] as $payment) {
            $insertPayment->execute($payment);
        }
        $expected = [];
        foreach (['invoice', 'service_other'] as $table) {
            $insert = $pdo->prepare('INSERT INTO ' . $table . ' VALUES (?, ?, ?, ?, ?)');
            $retained = [];
            foreach (['paid', 'expire', 'rejected', 'Unpaid', 'waiting'] as $status) {
                $id = 'direct-' . $status;
                $insert->execute([$id, 'example-user', $id, 'unpaid', 'payment-' . $status]);
                $retained[] = $id;
            }
            foreach (['active', 'other-user'] as $id) {
                $insert->execute([$id, $id === 'other-user' ? 'other-user' : 'example-user', $id, $id === 'active' ? 'active' : 'unpaid', null]);
                $retained[] = $id;
            }
            $legacy = $table === 'invoice' ? ['legacy-buy'] : ['legacy-extend', 'legacy-volume', 'legacy-time'];
            foreach ($legacy as $id) {
                $insert->execute([$id, 'example-user', $id, 'unpaid', null]);
                $retained[] = $id;
            }
            // Both attempts are retained when an old payload cannot identify which one was paid.
            $ambiguous = $table === 'invoice' ? 'legacy-buy' : 'legacy-extend';
            $insert->execute(['ambiguous-attempt', 'example-user', $ambiguous, 'unpaid', null]);
            $retained[] = 'ambiguous-attempt';
            $wrongUser = $table === 'invoice' ? 'wrong-user' : 'wrong-service-user';
            $partial = $table === 'invoice' ? 'partial-name' : 'partial-service';
            $opposite = $table === 'invoice' ? 'legacy-extend' : 'legacy-buy';
            foreach (['unlinked', $wrongUser, $partial, 'wrong-prefix', $opposite] as $id) {
                $insert->execute([$id, 'example-user', $id, 'unpaid', null]);
            }
            sort($retained);
            $expected[$table] = $retained;
        }
        cancelPendingGatewayOrders('example-user');
        foreach (['invoice' => 'id_invoice', 'service_other' => 'id'] as $table => $id) {
            $rows = $pdo->query('SELECT ' . $id . ' FROM ' . $table . ' ORDER BY ' . $id)->fetchAll(PDO::FETCH_COLUMN);
            same($expected[$table], $rows);
        }
        same(14, (int) $pdo->query('SELECT COUNT(*) FROM Payment_report')->fetchColumn());
    },
];

$failed = 0;
foreach ($tests as $name => $test) {
    try {
        $test();
        echo "PASS: $name\n";
    } catch (Throwable $error) {
        $failed++;
        fwrite(STDERR, "FAIL: $name: " . $error->getMessage() . "\n");
    }
}
echo count($tests) . " tests, $failed failed\n";
exit($failed === 0 ? 0 : 1);

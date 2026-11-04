<?php

// Reuse the real pre-billing callback with isolated lookups and outbound edges, never config.php.
function renewalSourceFunction(string $source, string $name): string
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

function renewalTestDefaults(): array
{
    return [
        'from_id' => 'example-user',
        'invoice' => ['id_invoice' => 'invoice-1', 'id_user' => 'example-user', 'Service_location' => 'panel-a', 'Status' => 'active', 'name_product' => 'standard-plan', 'username' => 'example-service'],
        'panel' => ['name_panel' => 'panel-a', 'status_extend' => 'on_extend', 'pricecustomvolume' => '{"f":2}', 'pricecustomtime' => '{"f":3}', 'inboundid' => '[]', 'code_panel' => 'panel-code'],
        'textbotlang' => [
            'users' => [
                'extend' => ['restartError' => 'Restart extension selection', 'error' => 'Extension unavailable', 'notSupportedPanel' => 'Panel does not support extension'],
                'customSellVolume' => ['btnVolume' => 'Custom volume', 'btnService' => 'Custom service'],
                'status' => ['infoUnavailable' => 'Service unavailable', 'panelNotConnected' => 'Panel unavailable'],
                'Discount' => ['notAllowed' => 'Discount unavailable', 'discountapplied' => 'Discount %s applied'],
            ],
        ],
    ];
}

function renewalFixturePDO(): PDO
{
    $pdo = new PDO('sqlite::memory:', null, null, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $pdo->exec("CREATE TABLE product (Location TEXT, agent TEXT, code_product TEXT, one_buy_status TEXT, price_product REAL, name_product TEXT, Service_time INTEGER, Volume_constraint INTEGER)");
    $pdo->exec("INSERT INTO product VALUES ('panel-a', 'f', 'product-a', '0', 100, 'standard-plan', 30, 5)");
    $pdo->exec("CREATE TABLE DiscountSell (code_product TEXT, code_panel TEXT, codeDiscount TEXT, agent TEXT, type TEXT, time INTEGER, limitDiscount INTEGER, usedDiscount INTEGER, useuser INTEGER, price REAL)");
    $pdo->exec("INSERT INTO DiscountSell VALUES ('product-a', 'panel-code', 'TEST', 'f', 'extend', 0, 10, 0, 2, 10)");
    $pdo->exec('CREATE TABLE Giftcodeconsumed (id_user TEXT, code TEXT)');
    $pdo->exec('PRAGMA query_only = ON');
    return $pdo;
}

function select($table, $field, $whereField = null, $whereValue = null, $type = 'select', $options = [])
{
    $GLOBALS['renewalTrace']['reads'][] = [$table, $whereField, $whereValue];
    if (isset($GLOBALS['renewalContext']['selectResolver'])) {
        return ($GLOBALS['renewalContext']['selectResolver'])($table, $field, $whereField, $whereValue, $type, $options);
    }
    $row = match ($table) {
        'invoice' => $GLOBALS['renewalContext']['invoice'],
        'marzban_panel' => $GLOBALS['renewalContext']['panel'],
        default => throw new RuntimeException('Unexpected pre-billing lookup: ' . $table),
    };
    return is_array($row) && isset($row[$whereField]) && (string) $row[$whereField] === (string) $whereValue ? $row : false;
}

function sendmessage(...$args): void { $GLOBALS['renewalTrace']['messages'][] = $args; }
function Editmessagetext(...$args): void { $GLOBALS['renewalTrace']['edits'][] = $args; }
function step(...$args): void { $GLOBALS['renewalTrace']['mutations'][] = ['step', $args]; }
function update(...$args): void { $GLOBALS['renewalTrace']['mutations'][] = ['update', $args]; }
function deductBalance(...$args): bool { $GLOBALS['renewalTrace']['mutations'][] = ['deductBalance', $args]; return false; }
function cancelPendingGatewayOrders(...$args): void { $GLOBALS['renewalTrace']['mutations'][] = ['cancelPendingGatewayOrders', $args]; }

function renewalConfirmationRunner(array $user, string $datain, array $context = []): array
{
    global $pdo;
    static $run;
    if ($run === null) {
        $source = file_get_contents(__DIR__ . '/../function.php');
        foreach (['invoiceBelongsToUser', 'decodeRenewalConfirmation'] as $name) {
            if (!function_exists($name)) {
                eval(renewalSourceFunction($source, $name));
            }
        }
        $source = file_get_contents(__DIR__ . '/../index.php');
        $start = strpos($source, '} elseif ($datain == "confirmserivce" || $datain == "confirmserdiscount") {');
        $start = $start === false ? false : strpos($source, '{', $start);
        $end = $start === false ? false : strpos($source, '$DataUserOut = $ManagePanel->DataUser($nameloc[\'Service_location\'], $nameloc[\'username\']);', $start);
        if ($start === false || $end === false) {
            throw new RuntimeException('Renewal confirmation pre-billing branch not found');
        }
        $branch = substr($source, $start + 1, $end - $start - 1);
        $run = eval('return static function ($user, $datain, $from_id, $textbotlang) { global $pdo; $message_id="example-message"; $text_inline="example-confirmation"; $keyboard="HOME"; '
            . $branch . ' return ["continued"=>true, "price"=>$pricelastextend, "product"=>$prodcut, "invoice"=>$nameloc]; };');
    }
    $context += renewalTestDefaults();
    $pdo = $context['pdo'] ?? renewalFixturePDO();
    $GLOBALS['renewalContext'] = $context;
    $GLOBALS['renewalTrace'] = ['messages' => [], 'edits' => [], 'reads' => [], 'mutations' => []];
    $user += ['Processing_value_four' => 'dis_TEST_100', 'agent' => 'f', 'Balance' => 10000, 'pricediscount' => 0];
    $result = $run($user, $datain, $context['from_id'], $context['textbotlang']);
    return ($result ?? ['continued' => false]) + ['trace' => $GLOBALS['renewalTrace']];
}

// Integration checks can include this runner with a scratch PDO and selectResolver.
if (defined('MIRZA_RENEWAL_INCLUDE_ONLY') && MIRZA_RENEWAL_INCLUDE_ONLY) {
    return;
}

error_reporting(E_ALL);
set_error_handler(static function ($severity, $message, $file, $line): bool {
    if (error_reporting() & $severity) {
        throw new ErrorException($message, 0, $severity, $file, $line);
    }
    return false;
});
$checks = 0;
$failed = 0;
$check = static function (bool $condition, string $message) use (&$checks): void {
    $checks++;
    if (!$condition) {
        throw new RuntimeException($message);
    }
};
$reject = static function (array $user, array $context = [], string $callback = 'confirmserivce') use ($check): array {
    $result = renewalConfirmationRunner($user, $callback, $context);
    $check(!$result['continued'], 'Invalid renewal must stop before billing or panel access');
    $check($result['trace']['mutations'] === [], 'Rejected renewal must not change user state, balance, invoices or payment drafts');
    $check(count($result['trace']['messages']) === 1, 'Rejected renewal must send one friendly response');
    return $result;
};
$valid = ['id_invoice' => 'invoice-1', 'code_product' => 'product-a'];
$tests = [
    'lost or malformed saved state rejects without warnings or lookups' => static function () use ($reject, $check): void {
        foreach (['0', '', '{bad json', 'null', 'false', '1', '"text"', '[]', '{}', null, false, 0, [], new stdClass()] as $value) {
            foreach (['confirmserivce', 'confirmserdiscount'] as $callback) {
                $result = $reject(['Processing_value' => $value], [], $callback);
                $check($result['trace']['reads'] === [], 'Invalid saved state must not issue invoice queries');
                $check($result['trace']['edits'] === [], 'Expired confirmation must not retire another flow keyboard');
                $check($result['trace']['messages'][0][2] === 'HOME', 'Expired confirmation must offer the home keyboard');
            }
        }
        $result = $reject([]);
        $check($result['trace']['reads'] === [] && $result['trace']['edits'] === [], 'Absent saved state must reject without reads or keyboard edits');
    },
    'required invoice and product identifiers reject invalid scalar shapes' => static function () use ($reject, $valid): void {
        foreach (['id_invoice', 'code_product'] as $key) {
            foreach ([null, false, true, 1.5, [], new stdClass(), '', '   '] as $value) {
                $state = $valid;
                $state[$key] = $value;
                $reject(['Processing_value' => json_encode($state)]);
            }
            $state = $valid;
            unset($state[$key]);
            $reject(['Processing_value' => json_encode($state)]);
        }
    },
    'missing and foreign invoices or panels stop before price and billing work' => static function () use ($reject, $valid): void {
        $base = renewalTestDefaults();
        $payload = ['Processing_value' => json_encode($valid)];
        $reject($payload, ['invoice' => false]);
        $reject($payload, ['invoice' => [...$base['invoice'], 'id_user' => 'another-user']]);
        $reject($payload, ['panel' => false]);
        $reject($payload, ['panel' => [...$base['panel'], 'status_extend' => 'off_extend']]);
        $reject($payload, ['invoice' => [...$base['invoice'], 'Status' => 'cancelled']]);
        $reject(['Processing_value' => json_encode([...$valid, 'code_product' => 'removed-product'])]);
    },
    'custom time and traffic must be present, numeric, finite and nonnegative' => static function () use ($reject, $valid): void {
        $base = renewalTestDefaults();
        $context = ['invoice' => [...$base['invoice'], 'name_product' => $base['textbotlang']['users']['customSellVolume']['btnVolume']]];
        $custom = $valid + ['time' => 30, 'data_limit' => 5];
        foreach (['time', 'data_limit'] as $key) {
            foreach ([null, true, false, [], 'invalid', '-1', -1, '1e999'] as $value) {
                $state = $custom;
                $state[$key] = $value;
                $reject(['Processing_value' => json_encode($state)], $context);
            }
            $state = $custom;
            unset($state[$key]);
            $reject(['Processing_value' => json_encode($state)], $context);
        }
        $reject(['Processing_value' => json_encode($custom)], ['panel' => [...$base['panel'], 'pricecustomvolume' => '{"f":1e308}']] + $context);
    },
    'discount confirmation requires its own saved discount context' => static function () use ($reject, $valid): void {
        foreach (['0', '', 'dis_', 'wrong_TEST', null, 123, []] as $context) {
            $reject(['Processing_value' => json_encode($valid), 'Processing_value_four' => $context], [], 'confirmserdiscount');
        }
    },
    'standard custom and discounted renewal keep their existing quoted prices' => static function () use ($check, $valid): void {
        $base = renewalTestDefaults();
        foreach (['confirmserivce' => 100, 'confirmserdiscount' => 90] as $callback => $price) {
            $result = renewalConfirmationRunner(['Processing_value' => json_encode($valid)], $callback);
            $check($result['continued'] && abs($result['price'] - $price) < 0.000001, 'Standard/discount renewal price changed');
            $check($result['trace']['mutations'] === [], 'Pre-billing continuation must not perform financial writes');
        }
        $context = ['invoice' => [...$base['invoice'], 'name_product' => $base['textbotlang']['users']['customSellVolume']['btnVolume']]];
        foreach ([['time' => 30, 'data_limit' => 5, 'price' => 100], ['time' => '30', 'data_limit' => '5', 'price' => 100], ['time' => 0, 'data_limit' => 0, 'price' => 0]] as $custom) {
            $result = renewalConfirmationRunner(['Processing_value' => json_encode($valid + $custom)], 'confirmserivce', $context);
            $check($result['continued'] && abs($result['price'] - $custom['price']) < 0.000001, 'Valid custom plan price changed');
            $check($result['trace']['mutations'] === [], 'Custom continuation must not perform financial writes');
        }
        $result = renewalConfirmationRunner(['Processing_value' => json_encode($valid), 'pricediscount' => 20], 'confirmserivce');
        $check($result['continued'] && abs($result['price'] - 80) < 0.000001, 'Existing user discount calculation changed');
        $check(decodeRenewalConfirmation('{"id_invoice":1,"code_product":0}') === ['id_invoice' => 1, 'code_product' => 0], 'Integer identifiers must remain accepted');
        $check(decodeRenewalConfirmation('{"id_invoice":" invoice-1 ","code_product":" product-a "}') === ['id_invoice' => ' invoice-1 ', 'code_product' => ' product-a '], 'Validation must not rewrite identifiers');
    },
];
foreach ($tests as $name => $test) {
    try {
        $test();
        echo "PASS: $name\n";
    } catch (Throwable $error) {
        $failed++;
        fwrite(STDERR, "FAIL: $name: " . $error->getMessage() . "\n");
    }
}
echo 'renewal-confirmation: ' . count($tests) . " tests, $checks checks, $failed failed\n";
exit($failed === 0 ? 0 : 1);

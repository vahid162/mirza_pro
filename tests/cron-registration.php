<?php

// Exercise only scheduler helpers in a disposable directory, never config.php or a real crontab.
function cronSourceFunction(string $source, string $name, string $directory): string
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
            $code .= is_array($token) ? ($token[0] === T_DIR ? var_export($directory, true) : $token[1]) : $token;
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

$fixture = sys_get_temp_dir() . '/mirza-cron-test-' . bin2hex(random_bytes(8));
mkdir($fixture, 0700);
mkdir($fixture . '/storage', 0700);
mkdir($fixture . '/cronbot', 0700);
$functionSource = file_get_contents(__DIR__ . '/../function.php');
file_put_contents($fixture . '/functions.php', "<?php\n"
    . cronSourceFunction($functionSource, 'isShellExecAvailable', $fixture) . "\n"
    . cronSourceFunction($functionSource, 'activecron', $fixture));
copy(__DIR__ . '/../cronbot/jobs.php', $fixture . '/cronbot/jobs.php');
$adminSource = file_get_contents(__DIR__ . '/../admin.php');
$adminStart = strpos($adminSource, '} elseif (in_array($datain, ["cronstatus_refresh", "cronstatus_fix"])');
$adminStart = $adminStart === false ? false : strpos($adminSource, '{', $adminStart);
$adminEnd = $adminStart === false ? false : strpos($adminSource, '} elseif (', $adminStart);
if ($adminStart === false || $adminEnd === false) {
    throw new RuntimeException('Admin cron repair branch not found');
}
file_put_contents($fixture . '/admin-branch.php', '<?php ' . substr($adminSource, $adminStart + 1, $adminEnd - $adminStart - 1));
$child = <<<'PHP'
<?php
error_reporting(E_ALL);
set_error_handler(static function ($severity, $message, $file, $line): bool {
    if (error_reporting() & $severity) {
        throw new ErrorException($message, 0, $severity, $file, $line);
    }
    return false;
});
$calls = [];
function removeCron($pattern): bool
{
    $GLOBALS['calls'][] = ['remove', $pattern];
    return true;
}
function addCronIfNotExists($command): bool
{
    $GLOBALS['calls'][] = ['add', $command];
    return $GLOBALS['registerResult'];
}
function cronStatusMenu(): array { return ['cron-status', 'cron-keyboard']; }
function Editmessagetext(...$args): void { $GLOBALS['edits'][] = $args; }
require __DIR__ . '/functions.php';
require __DIR__ . '/cronbot/jobs.php';
$domainhosts = match ($argv[1]) {
    'invalid-domain' => [],
    'empty-domain' => '',
    default => 'example.invalid/nested/bot',
};
$registerResult = $argv[2] !== 'failure';
if ($argv[1] === 'binary') {
    echo json_encode(['binary' => mirza_cron_php_binary()]);
    exit;
}
$healthy = ['dispatcher' => time() - 30, 'php_cli' => '8.5', 'pdo_mysql' => true];
$status = match ($argv[1]) {
    'recent', 'admin-fixed' => $healthy,
    'stale' => [...$healthy, 'dispatcher' => time() - 3600],
    'future' => [...$healthy, 'dispatcher' => time() + 3600],
    'string' => [...$healthy, 'dispatcher' => (string) time()],
    'zero' => [...$healthy, 'dispatcher' => 0],
    'bad-pdo' => [...$healthy, 'pdo_mysql' => false],
    'missing-cli' => ['dispatcher' => time(), 'pdo_mysql' => true],
    'old-cli' => [...$healthy, 'php_cli' => '8.4'],
    'nonstring-cli' => [...$healthy, 'php_cli' => []],
    'malformed' => null,
    'missing', 'invalid-domain', 'empty-domain', 'admin-failed', 'admin-refresh' => false,
};
if ($status !== false) {
    file_put_contents(__DIR__ . '/storage/cron_status.json', $status === null ? '{invalid JSON' : json_encode($status));
}
if (str_starts_with($argv[1], 'admin-')) {
    $datain = $argv[1] === 'admin-refresh' ? 'cronstatus_refresh' : 'cronstatus_fix';
    $textbotlang = ['Admin' => ['cronHealth' => ['fixed' => 'FIXED']]];
    $from_id = 'example-user';
    $message_id = 'example-message';
    require __DIR__ . '/admin-branch.php';
    echo json_encode(['message' => $edits[0][2], 'calls' => $calls]);
    exit;
}
echo json_encode(['result' => activecron(), 'calls' => $calls, 'fixture' => __DIR__]);
PHP;
file_put_contents($fixture . '/child.php', $child);

$failed = 0;
$checks = 0;
$run = static function (string $status, bool $restricted, string $registration = 'success') use ($fixture): array {
    @unlink($fixture . '/storage/cron_status.json');
    $command = [PHP_BINARY, '-d', 'log_errors=0', '-d', 'display_errors=stderr'];
    if ($restricted) {
        $command = [...$command, '-d', 'open_basedir=' . $fixture . PATH_SEPARATOR . sys_get_temp_dir(), '-d', 'disable_functions=shell_exec'];
    }
    $process = proc_open([...$command, $fixture . '/child.php', $status, $registration], [0 => ['pipe', 'r'], 1 => ['pipe', 'w'], 2 => ['pipe', 'w']], $pipes);
    if (!is_resource($process)) {
        throw new RuntimeException('Cannot start isolated cron test');
    }
    fclose($pipes[0]);
    $stdout = stream_get_contents($pipes[1]);
    $stderr = stream_get_contents($pipes[2]);
    fclose($pipes[1]);
    fclose($pipes[2]);
    $exit = proc_close($process);
    if ($exit !== 0 || $stderr !== '') {
        throw new RuntimeException('Scheduler helper emitted an error: ' . trim($stderr));
    }
    return json_decode($stdout, true, 512, JSON_THROW_ON_ERROR);
};
$check = static function (bool $condition, string $message) use (&$checks): void {
    $checks++;
    if (!$condition) {
        throw new RuntimeException($message);
    }
};
$tests = [
    'recent CLI heartbeat prevents web cron mutation with shell disabled' => static function () use ($run, $check): void {
        $result = $run('recent', true);
        $check($result['result'] === true && $result['calls'] === [], 'Existing healthy dispatcher must be recognized without cron edits');
    },
    'recent CLI heartbeat prevents duplicate registration with shell available' => static function () use ($run, $check): void {
        $result = $run('recent', false);
        $check($result['result'] === true && $result['calls'] === [], 'A healthy external scheduler must not be replaced');
    },
    'unsupported web environment never mutates cron for invalid or absent heartbeat' => static function () use ($run, $check): void {
        foreach (['stale', 'missing', 'malformed', 'future', 'string', 'zero', 'bad-pdo', 'missing-cli', 'old-cli', 'nonstring-cli'] as $status) {
            $result = $run($status, true);
            $check($result['result'] === false && $result['calls'] === [], 'Shell-disabled registration must safely fail for ' . $status . ' status');
        }
    },
    'supported CLI registration preserves cleanup patterns and dispatcher command' => static function () use ($run, $check): void {
        foreach (['stale', 'missing', 'malformed', 'future', 'string', 'zero', 'bad-pdo', 'missing-cli', 'old-cli', 'nonstring-cli'] as $status) {
            $result = $run($status, false);
            $check($result['result'] === true, 'Supported registration must report success for ' . $status . ' status');
            $check(array_slice($result['calls'], 0, 2) === [
                ['remove', 'https://example.invalid/nested/bot/cronbot/'],
                ['remove', $result['fixture'] . '/cronbot/'],
            ], 'Legacy cleanup patterns must stay scoped to this bot');
            $check(count($result['calls']) === 3 && $result['calls'][2][0] === 'add', 'Register exactly one dispatcher');
            $check(str_contains($result['calls'][2][1], '; ' . PHP_BINDIR . '/php ' . $result['fixture'] . '/cronbot/run.php '), 'Supported CLI must use the current PHP binary and dispatcher');
        }
    },
    'failed registration does not report success' => static function () use ($run, $check): void {
        $result = $run('missing', false, 'failure');
        $check($result['result'] === false, 'Propagate the registration failure');
    },
    'missing or invalid bot domain never changes cron' => static function () use ($run, $check): void {
        foreach (['invalid-domain', 'empty-domain'] as $status) {
            $result = $run($status, false);
            $check($result['result'] === false && $result['calls'] === [], 'An invalid bot domain must not register cron');
        }
    },
    'admin repair reports success only when the scheduler is available' => static function () use ($run, $check): void {
        foreach (['admin-failed' => 'cron-status', 'admin-refresh' => 'cron-status', 'admin-fixed' => "FIXED\n\ncron-status"] as $status => $message) {
            $result = $run($status, $status !== 'admin-refresh');
            $check($result['message'] === $message && $result['calls'] === [], 'Admin cron action must not claim a failed repair or mutate a healthy scheduler');
        }
    },
    'PHP binary probing tolerates open_basedir without a warning' => static function () use ($run, $check): void {
        $check($run('binary', true)['binary'] === 'php', 'Restricted optional probes must return the fallback quietly');
        $check($run('binary', false)['binary'] === PHP_BINDIR . '/php', 'Unrestricted CLI must retain current PHP selection');
    },
];

try {
    foreach ($tests as $name => $test) {
        try {
            $test();
            echo "PASS: $name\n";
        } catch (Throwable $error) {
            $failed++;
            fwrite(STDERR, "FAIL: $name: " . $error->getMessage() . "\n");
        }
    }
} finally {
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($fixture, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST) as $entry) {
        $entry->isDir() ? rmdir($entry->getPathname()) : unlink($entry->getPathname());
    }
    rmdir($fixture);
}
echo 'cron-registration: ' . count($tests) . " tests, $checks checks, $failed failed\n";
exit($failed === 0 ? 0 : 1);

<?php
// Each regression script runs in its own process and never loads config.php.
if (PHP_SAPI !== 'cli') {
    exit(1);
}
$failed = 0;
foreach (['runtime-warnings.php', 'panel-response.php', 'subpath.php'] as $test) {
    $process = proc_open([PHP_BINARY, __DIR__ . '/' . $test], [0 => ['pipe', 'r'], 1 => STDOUT, 2 => STDERR], $pipes);
    if (!is_resource($process)) {
        throw new RuntimeException('Cannot start regression test');
    }
    fclose($pipes[0]);
    if (proc_close($process) !== 0) {
        $failed++;
    }
}
exit($failed === 0 ? 0 : 1);

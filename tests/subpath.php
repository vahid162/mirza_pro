<?php

// Run with: php tests/subpath.php. No application configuration or database is loaded.
(static function (): void {
    $checks = 0;
    $check = static function (bool $condition, string $message) use (&$checks): void {
        ++$checks;
        if (!$condition) {
            throw new RuntimeException($message);
        }
    };
    $render = static function (string $scriptName): string {
        $previous = $_SERVER['SCRIPT_NAME'] ?? null;
        $_SERVER['SCRIPT_NAME'] = $scriptName;
        ob_start();
        try {
            include __DIR__ . '/../app/index.php';
            return ob_get_contents();
        } finally {
            ob_end_clean();
            if ($previous === null) {
                unset($_SERVER['SCRIPT_NAME']);
            } else {
                $_SERVER['SCRIPT_NAME'] = $previous;
            }
        }
    };
    $bootstrap = static function (string $html): array {
        if (!preg_match('~<base href="([^"]*)"~', $html, $base)
            || !preg_match('~<script>window\.MIRZA_BOT_BASE_PATH = (.*?);</script>~s', $html, $variable)) {
            throw new RuntimeException('Missing Mini App base bootstrap');
        }
        return [
            html_entity_decode($base[1], ENT_QUOTES | ENT_HTML5, 'UTF-8'),
            json_decode($variable[1], true, 512, JSON_THROW_ON_ERROR),
        ];
    };
    $resolve = static function (string $reference, string $base): string {
        $url = parse_url($base);
        $origin = $url['scheme'] . '://' . $url['host'];
        $path = str_starts_with($reference, '/')
            ? $reference
            : substr($url['path'], 0, strrpos($url['path'], '/') + 1) . $reference;
        $segments = [];
        foreach (explode('/', $path) as $segment) {
            if ($segment === '..') {
                array_pop($segments);
            } elseif ($segment !== '' && $segment !== '.') {
                $segments[] = $segment;
            }
        }
        return $origin . '/' . implode('/', $segments) . (str_ends_with($path, '/') ? '/' : '');
    };
    $bundle = file_get_contents(__DIR__ . '/../app/assets/index-C-2a0Dur.js');
    $check(str_contains($bundle, 'const mirzaBotBasePath=window.MIRZA_BOT_BASE_PATH||"";'), 'Bundle does not use the PHP bootstrap prefix');
    foreach (['"/app/"' => 3, '"/app"' => 1, '"/api"' => 1] as $literal => $count) {
        $check(substr_count($bundle, $literal) === $count, 'Unexpected compiled path count: ' . $literal);
        $check(substr_count($bundle, '(mirzaBotBasePath+' . $literal . ')') === $count, 'Unprefixed compiled path remains: ' . $literal);
    }
    $check(str_contains($bundle, 'baseURL:window.location.origin+(mirzaBotBasePath+"/api")'), 'API URL must include the installation prefix');
    $check(str_contains($bundle, 'basename:(mirzaBotBasePath+"/app")'), 'Router basename must include the installation prefix');
    $check(str_contains($bundle, 'return(mirzaBotBasePath+"/app/")+b'), 'Compiled asset path must preserve the minified return token');

    $panel = file_get_contents(__DIR__ . '/../panel/js/sort_keyboard.js');
    $check(str_contains($panel, 'new URL("../../api/keyboard",import.meta.url).href'), 'Panel API must resolve from the module URL');
    $check(!str_contains($panel, 'window.location.origin)+"/api/keyboard"'), 'Panel API still targets the domain root');
    $check(str_contains($panel, 'er.VITE_API+"/api/keyboard"'), 'Explicit API base override was removed');

    foreach (['' => '/app/index.php', '/nested/bot' => '/nested/bot/app/index.php'] as $prefix => $script) {
        $html = $render($script);
        [$base, $variable] = $bootstrap($html);
        $check($base === $prefix . '/app/', 'Wrong base href for ' . $script);
        $check($variable === $prefix, 'Wrong JavaScript prefix for ' . $script);
        $check(substr_count($html, '<base ') === 1, 'The document must have exactly one base');
        preg_match_all('~\b(?:src|href)="(\./[^"]+)"~', $html, $references);
        $check(count($references[1]) === 4, 'Unexpected initial Mini App asset references');
        foreach ([$prefix . '/app/', $prefix . '/app/services/example'] as $page) {
            $document = 'https://example.invalid' . $page;
            $documentBase = $resolve($base, $document);
            foreach ($references[1] as $reference) {
                $check(
                    $resolve($reference, $documentBase) === 'https://example.invalid' . $prefix . '/app/' . substr($reference, 2),
                    'Initial asset escapes the Mini App base on a nested reload'
                );
            }
        }
        // Resolve the actual module-relative API expression for both deployment layouts.
        $panelModule = 'https://example.invalid' . $prefix . '/panel/js/sort_keyboard.js';
        $check($resolve('../../api/keyboard', $panelModule) === 'https://example.invalid' . $prefix . '/api/keyboard', 'Panel API escapes the bot directory');
    }

    [$base, $variable] = $bootstrap($render('//untrusted.example/app/index.php'));
    $check($base === '/untrusted.example/app/' && $variable === '/untrusted.example', 'A script path must not become a protocol-relative URL');
    $html = $render('/bad"</script><script>/app/index.php');
    [$base, $variable] = $bootstrap($html);
    $check($variable === '/bad"</script><script>', 'JSON escaping changed the actual prefix');
    $check(substr_count($html, '<script>') === 1, 'The script path injected an HTML script element');
    $check(str_contains($html, '&quot;') && str_contains($html, '&lt;'), 'Base href is not HTML escaped');
    $check(str_contains($html, '\u003C') && str_contains($html, '\u0022'), 'Inline JavaScript data is not safely escaped');

    require_once __DIR__ . '/../cronbot/jobs.php';
    $jobs = array_column(mirza_cron_jobs(), 'job');
    $check(!in_array('optimize_order', $jobs, true), 'Automatic invoice deletion must stay disabled by default');
    $check(in_array('payment_expire', $jobs, true) && in_array('disableconfig', $jobs, true), 'Normal expiry jobs must remain scheduled');
    echo 'subpath: PASS (' . $checks . " checks)\n";
})();

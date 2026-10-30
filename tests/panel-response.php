<?php
namespace MirzaPanelTest;

use ErrorException;
use RuntimeException;
use Throwable;

if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}

// Actual source runs in this namespace; unqualified cURL calls hit local stubs.
foreach (['CURLOPT_URL', 'CURLOPT_HTTPGET', 'CURLOPT_RETURNTRANSFER', 'CURLOPT_TIMEOUT_MS', 'CURLOPT_HTTPHEADER', 'CURLINFO_HTTP_CODE'] as $i => $name) {
    if (!defined($name)) define($name, $i + 1);
}
class PDO { const FETCH_ASSOC = 2; const PARAM_STR = 2; }

function actualFunction(string $file, string $name): string
{
    $source = file_get_contents($file);
    if (!preg_match('/function\s+' . preg_quote($name, '/') . '\s*\(/', $source, $match, PREG_OFFSET_CAPTURE)) {
        throw new RuntimeException('Source function not found');
    }
    $tokens = token_get_all("<?php\n" . substr($source, $match[0][1]));
    $result = '';
    $depth = 0;
    foreach ($tokens as $token) {
        if (is_array($token)) {
            if ($token[0] !== T_OPEN_TAG) $result .= $token[1];
            continue;
        }
        $result .= $token;
        if ($token === '{') $depth++;
        if ($token === '}' && --$depth === 0) return $result;
    }
    throw new RuntimeException('Incomplete source function');
}

$fixture = [];
function resetFixture(): void
{
    $GLOBALS['fixture'] = [
        'panels' => [['id' => 1, 'name_panel' => 'failed-panel', 'code_panel' => 'failed', 'url_panel' => 'https://never-request.invalid'], ['id' => 2, 'name_panel' => 'healthy-panel', 'code_panel' => 'healthy', 'url_panel' => 'https://never-request.invalid']],
        'tokens' => ['failed' => ['access_token' => 'do-not-log-token'], 'healthy' => ['access_token' => 'do-not-log-token']],
        'responses' => ['failed' => ['status' => 503, 'errno' => 0, 'body' => '{"detail":"do-not-log-body"}'], 'healthy' => ['status' => 200, 'errno' => 0, 'body' => '{"users":[{"username":"fixture-service","status":"on_hold"}]}']],
        'current' => null, 'sent' => [], 'updated' => [], 'requests' => 0,
    ];
}
function select($table, $fields = '*', $key = null, $value = null, $fetch = null)
{
    if ($table === 'marzban_panel') {
        foreach ($GLOBALS['fixture']['panels'] as $panel) if ($panel[$key] === $value) return $panel;
        return null;
    }
    if ($table === 'invoice') return ['username' => $value, 'Status' => 'active', 'id_user' => 'fixture-user', 'time_sell' => time() - 2 * 86400];
    throw new RuntimeException('Unexpected select in offline test');
}
function token_panel($code)
{
    $GLOBALS['fixture']['current'] = $code;
    if (($GLOBALS['fixture']['throw'] ?? null) === $code) throw new RuntimeException('do-not-log-token https://never-request.invalid');
    return $GLOBALS['fixture']['tokens'][$code] ?? null;
}
function curl_init() { return (object) ['options' => []]; }
function curl_setopt($handle, $option, $value) { $handle->options[$option] = $value; return true; }
function curl_exec($handle) { $GLOBALS['fixture']['requests']++; return $GLOBALS['fixture']['responses'][$GLOBALS['fixture']['current']]['body']; }
function curl_errno($handle) { return $GLOBALS['fixture']['responses'][$GLOBALS['fixture']['current']]['errno']; }
function curl_getinfo($handle, $option) { return $GLOBALS['fixture']['responses'][$GLOBALS['fixture']['current']]['status']; }
function sendmessage(...$arguments) { $GLOBALS['fixture']['sent'][] = $arguments; }
function update(...$arguments) { $GLOBALS['fixture']['updated'][] = $arguments; }

class FixtureStatement
{
    private int $position = 0;
    public function __construct(private bool $panels) {}
    public function execute($parameters = []) { return true; }
    public function fetch($mode = null) { return $this->panels ? ($GLOBALS['fixture']['panels'][$this->position++] ?? false) : false; }
    public function fetchColumn() { return false; }
    public function bindParam(...$arguments) { return true; }
}
class FixturePDO
{
    public function prepare($query) { return new FixtureStatement(str_contains($query, 'FROM marzban_panel')); }
}
function runActualJob(): void
{
    $pdo = new FixturePDO();
    $setting = ['on_hold_day' => 1, 'id_support' => 'fixture-support'];
    $textbotlang = ['users' => ['notify' => ['onHoldReminder' => '%s %s %s']]];
    $source = file_get_contents(__DIR__ . '/../cronbot/on_hold.php');
    $offset = strpos($source, '$stmt = $pdo->prepare');
    if ($offset === false) throw new RuntimeException('Job SQL entrypoint not found');
    eval('namespace MirzaPanelTest; use \\RuntimeException; use \\Throwable; ' . substr($source, $offset));
}
function check($condition, string $description): void
{
    if (!$condition) throw new RuntimeException($description);
}

set_error_handler(static function ($code, $message, $file, $line) { throw new ErrorException($message, 0, $code, $file, $line); });
eval('namespace MirzaPanelTest; ' . actualFunction(__DIR__ . '/../panels/Api/Marzban.php', 'getusers'));
$log = tempnam(sys_get_temp_dir(), 'mirza-panel-test-');
ini_set('error_log', $log);
$checks = 0;
try {
    resetFixture();
    check(getusers('healthy-panel', 'on_hold')['users'][0]['username'] === 'fixture-service', 'Successful users payload must be preserved');
    $checks++;
    foreach ([
        ['status' => 200, 'errno' => 0, 'body' => 'not-json'],
        ['status' => 200, 'errno' => 0, 'body' => 'null'],
        ['status' => 200, 'errno' => 0, 'body' => '{"detail":"do-not-log-body"}'],
        ['status' => 200, 'errno' => 0, 'body' => '{"users":null}'],
        ['status' => 200, 'errno' => 0, 'body' => '{"users":[{}]}'],
        ['status' => 200, 'errno' => 0, 'body' => '{"users":[null]}'],
        ['status' => 503, 'errno' => 0, 'body' => '{"users":[]}'],
        ['status' => 401, 'errno' => 0, 'body' => '{"detail":"do-not-log-token"}'],
        ['status' => 0, 'errno' => 28, 'body' => false],
    ] as $response) {
        resetFixture();
        $fixture['responses']['failed'] = $response;
        $result = getusers('failed-panel', 'on_hold');
        check(is_array($result) && !empty($result['error']), 'Failed HTTP/JSON/users response must return a structured error');
        check(($result['http_status'] ?? null) === $response['status'] && ($result['curl_errno'] ?? null) === $response['errno'], 'Failure must retain numeric HTTP/cURL diagnostics');
        check(!str_contains(json_encode($result), 'do-not-log-') && !str_contains(json_encode($result), 'never-request'), 'Failure must not expose response bodies, URLs or tokens');
        $checks++;
    }
    resetFixture();
    $fixture['tokens']['failed'] = ['error' => 'do-not-log-token https://never-request.invalid'];
    check(!empty(getusers('failed-panel', 'on_hold')['error']) && $fixture['requests'] === 0, 'Missing authentication must fail without a users request');
    check(!empty(getusers('missing-panel', 'on_hold')['error']), 'Unknown panel must fail without an array warning');
    $checks += 2;
    resetFixture();
    $fixture['responses']['failed']['status'] = 200;
    $fixture['responses']['failed']['body'] = '{"users":[]}';
    check(getusers('failed-panel', 'on_hold')['users'] === [], 'A valid empty users list is successful');
    $checks++;
    resetFixture();
    $partialFailure = false;
    try { runActualJob(); } catch (RuntimeException $error) { $partialFailure = str_contains($error->getMessage(), 'on_hold'); }
    check($partialFailure, 'A partial panel scan must signal failure to the dispatcher');
    check(count($fixture['sent']) === 1 && count($fixture['updated']) === 1, 'A failed panel must not prevent a healthy panel reminder');
    $diagnostics = file_get_contents($log);
    check(str_contains($diagnostics, '503') && !str_contains($diagnostics, 'do-not-log-') && !str_contains($diagnostics, 'never-request'), 'Panel failure log must be useful and sanitized');
    $checks += 3;
    resetFixture();
    $fixture['throw'] = 'failed';
    $partialFailure = false;
    try { runActualJob(); } catch (RuntimeException $error) { $partialFailure = str_contains($error->getMessage(), 'on_hold'); }
    check($partialFailure && count($fixture['sent']) === 1, 'An unexpected panel exception must not stop healthy panel reminders');
    $diagnostics = file_get_contents($log);
    check(str_contains($diagnostics, 'request_exception') && !str_contains($diagnostics, 'do-not-log-') && !str_contains($diagnostics, 'never-request'), 'Unexpected exception diagnostics must not expose exception content');
    $checks += 2;
    resetFixture();
    $fixture['responses']['failed'] = ['status' => 200, 'errno' => 0, 'body' => '{"users":[]}'];
    runActualJob();
    check(count($fixture['sent']) === 1, 'Healthy/empty panels must complete without a partial failure');
    $checks++;
    echo "PASS panel-response: {$checks} offline checks\n";
} catch (Throwable $error) {
    fwrite(STDERR, 'FAIL panel-response: ' . $error->getMessage() . "\n");
    exit(1);
} finally {
    unlink($log);
}

<?php
chdir(__DIR__);
ini_set('error_log', 'error_log');
date_default_timezone_set('Asia/Tehran');
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../botapi.php';
require_once __DIR__ . '/../panels.php';
require_once __DIR__ . '/../function.php';
$textbotlang = languagechange();
$ManagePanel = new ManagePanel();

$setting = select("setting", "*");
// buy service 
$stmt = $pdo->prepare("SELECT * FROM marzban_panel WHERE type = 'marzban'  ORDER BY RAND() LIMIT 25");
$stmt->execute();
$failedPanels = 0;
        while ($panel = $stmt->fetch(PDO::FETCH_ASSOC)) {
        try {
            $response = getusers($panel['name_panel'], "on_hold");
        } catch (Throwable $e) {
            $response = ['error' => 'request_exception'];
        }
        if (!is_array($response) || !is_array($response['users'] ?? null)) {
            $failedPanels++;
            error_log(sprintf('on_hold: panel_id=%d error=%s http_status=%d curl_errno=%d',
                (int) ($panel['id'] ?? 0), $response['error'] ?? 'invalid_users_response',
                (int) ($response['http_status'] ?? 0), (int) ($response['curl_errno'] ?? 0)));
            continue;
        }
        $users = $response['users'];
        foreach($users as $user){
        $invoice = select("invoice","*","username",$user['username'],"select");
        if($invoice == false )continue;
        if($invoice['Status'] == "send_on_hold")continue;
        $line  = $invoice['username'];
        $resultss = $invoice;
        $marzban_list_get = $panel;
        $get_username_Check = $user;
        if($get_username_Check['status'] != "Unsuccessful"){
        if(in_array($get_username_Check['status'],['on_hold'])){
            $timebuyremin = (time() - $resultss['time_sell'])/86400;
        if ($timebuyremin >= $setting['on_hold_day']) {
        $sql = "SELECT 1 FROM service_other WHERE username = :username  AND type = 'change_location' LIMIT 1";
        $stmtOther = $pdo->prepare($sql);
        $stmtOther->bindParam(':username', $line ,PDO::PARAM_STR);
        $stmtOther->execute();
        if($stmtOther->fetchColumn() !== false)continue;
                $text = sprintf($textbotlang['users']['notify']['onHoldReminder'], $line, $setting['on_hold_day'], $setting['id_support']);
            sendmessage($resultss['id_user'], $text, null, 'HTML');
            update("invoice","Status","send_on_hold", "username",$line);
            }
        }
        }
}
}
if ($failedPanels > 0) {
    throw new RuntimeException("on_hold: $failedPanels panel scan(s) failed; see error_log");
}

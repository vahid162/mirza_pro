<?php
ini_set('error_log', 'error.log');
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../jdf.php';
require_once __DIR__ . '/../botapi.php';
require_once __DIR__ . '/../Marzban.php';
require_once __DIR__ . '/../panels.php';
require_once __DIR__ . '/../function.php';
require_once __DIR__ . '/../keyboard.php';
$ManagePanel = new ManagePanel();
require __DIR__ . '/../vendor/autoload.php';
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\Font\OpenSans;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

$PaySetting = ($pdo->query("SELECT (ValuePay) FROM PaySetting WHERE NamePay = 'statuscardautoconfirm'"))->fetch(PDO::FETCH_ASSOC)['ValuePay'];
if ($PaySetting == "onautoconfirm") {
    $name_post = array_keys($_POST);
    $name_post = array_map('htmlspecialchars', $name_post);
    $name_post = preg_split("/_+/", $name_post[0], -1);
    $secret_key = select("admin", "*", "password", base64_decode($name_post[0]), "count");
    if ($secret_key == 0)
        return;
    $name_bank = $name_post[1];
    $valuepost = $_POST["{$name_post[0]}_$name_bank"];
    $setting = ($pdo->query("SELECT * FROM setting"))->fetch(PDO::FETCH_ASSOC);
    $admin_ids = array_column(($pdo->query("SELECT (id_admin) FROM admin"))->fetchAll(PDO::FETCH_ASSOC), 'id_admin');
    if ($name_bank == 'blu') {
        $pattern = "/(\d[\d,]+) ریال به حساب شما نشست\./u";
        preg_match($pattern, $valuepost, $matches);
        if (isset($matches[1])) {
            $amountString = str_replace(',', '', $matches[1]);
            $amount = intval($amountString);
            $amountInteger = intval($amount) * 0.1;
        }
    } elseif ($name_bank == "meli") {
        $pattern = '/انتقال:(.*?)[+\-]/u';
        preg_match($pattern, $valuepost, $matches);
        if (isset($matches[1])) {
            $amount = str_replace([',', '-'], '', $matches[1]);
            $amountInteger = intval($amount) * 0.1;
        }
    } elseif ($name_bank == "grdsh") {
        preg_match('/مبلغ: ([0-9,]+)/u', $valuepost, $matches);
        if (isset($matches[1])) {
            $amountInteger = str_replace(',', '', $matches[1]) * 0.1;
        }
    } elseif ($name_bank == "sadhrat") {
        preg_match('/انتقال: ([\d,]+)/', $valuepost, $matches);
        if (isset($matches[1])) {
            $amountInteger = str_replace(',', '', $matches[1]) * 0.1;
        }
    } elseif ($name_bank == "melet") {
        preg_match('/واریز(\d{1,3}(?:,\d{3})*)/u', $valuepost, $matches);
        if (isset($matches[1])) {
            $amountInteger = str_replace(',', '', $matches[1]) * 0.1;
        }
    } elseif ($name_bank == "terjart") {
        if (preg_match('/واریز\s*:\s*([\d,]+)/u', $valuepost, $matches)) {
            $amountInteger = str_replace(',', '', $matches[1]) * 0.1;
        }
    } elseif ($name_bank == "keshavarsi") {
        if (preg_match('/واريز(\d+(?:,\d+)*)/', $valuepost, $matches)) {
            $amountInteger = str_replace(',', '', $matches[1]) * 0.1;
        }
    } elseif ($name_bank == "resalet") {
        if (preg_match('/\+([\d,]+)/', $valuepost, $matches)) {
            $amountInteger = str_replace(',', '', $matches[1]) * 0.1;
        }
    } elseif ($name_bank == "sheahr") {
        if (preg_match('/مبلغ:(\d+(?:,\d+)*)ريال//', $valuepost, $matches)) {
            $amountInteger = str_replace(',', '', $matches[1]) * 0.1;
        }
    } elseif ($name_bank == "maskan") {
        if (preg_match('/انتقال اينترنت:\D*([\d,]+)/u', $valuepost, $matches)) {
            $amountInteger = str_replace(',', '', $matches[1]) * 0.1;
        }
    } elseif ($name_bank == "parsian") {
        if (preg_match('/مبلغ:(\d{1,3}(?:,\d{3})*)\+/', $valuepost, $matches)) {
            file_put_contents('ss', json_encode($matches));
            $amountInteger = str_replace(',', '', $matches[1]) * 0.1;
        }
    } elseif ($name_bank == "sphe") {
        if (preg_match('/مبلغ:\s*([\d,]+)\s*ريال/', $valuepost, $matches)) {
            $amountInteger = str_replace(',', '', $matches[1]) * 0.1;
        }
    } elseif ($name_bank == "paselc") {
        if (preg_match('/\+([0-9,]+)/', $valuepost, $matches)) {
            $amountInteger = str_replace(',', '', $matches[1]) * 0.1;
        }
    } elseif ($name_bank == "gharz") {
        if (preg_match('/(\d{1,3}(?:,\d{3})*\+)/', $valuepost, $matches)) {
            $amountInteger = str_replace(',', '', $matches[1]) * 0.1;
        }
    }


    if (is_numeric($amountInteger) && substr($amountInteger, -3) === '000')
        return;
    if (isset($amountInteger) && $amountInteger !== NULL) {
        $stmt = $pdo->prepare("SELECT * FROM Payment_report WHERE price = :amountInteger AND (payment_Status = 'Unpaid' OR payment_Status = 'waiting')");
        $stmt->bindValue(':amountInteger', $amountInteger, PDO::PARAM_INT);
        $stmt->execute();
        $datauser = $stmt->fetch(PDO::FETCH_ASSOC);
        $order_id = $datauser['id_order'];
        $__q13 = $pdo->prepare("SELECT * FROM Payment_report WHERE id_order = ? LIMIT 1");
        $__q13->bindValue(1, $order_id, PDO::PARAM_STR);
        $__q13->execute();
        $Payment_report = $__q13->fetch(PDO::FETCH_ASSOC);
        if (!isset($Payment_report['price']) || $Payment_report['price'] == null)
            return;
        $__q14 = $pdo->prepare("SELECT * FROM user WHERE id = ? LIMIT 1");
        $__q14->bindValue(1, $Payment_report['id_user'], PDO::PARAM_STR);
        $__q14->execute();
        $Balance_id = $__q14->fetch(PDO::FETCH_ASSOC);
        $textbotlang = languagechange();

        if ($Payment_report['payment_Status'] == "paid" || $Payment_report['payment_Status'] == "reject") {
            telegram('answerCallbackQuery', array(
                'callback_query_id' => $callback_query_id,
                'text' => $textbotlang['Admin']['Payment']['reviewedPayment'],
                'show_alert' => true,
                'cache_time' => 5,
            ));
            return;
        }
        DirectPayment($order_id, "../images.jpg");
        update("Payment_report", "payment_Status", "paid", 'id_order', $order_id);
        $__q15 = $pdo->prepare("SELECT (Balance) FROM user WHERE id = ? LIMIT 1");
        $__q15->bindValue(1, $Payment_report['id_user'], PDO::PARAM_STR);
        $__q15->execute();
        $balanceformatsell = number_format($__q15->fetch(PDO::FETCH_ASSOC)['Balance'], 0);
        $paymentreports = select("topicid", "idreport", "report", "paymentreport", "select")['idreport'];
        $text_report = sprintf($textbotlang['paymentGateway']['reportCard'], $Payment_report['price'], $Balance_id['id'], $Balance_id['username'], $balanceformatsell, $order_id);
        if (strlen($setting['Channel_Report']) > 0) {
            telegram('sendmessage', [
                'chat_id' => $setting['Channel_Report'],
                'message_thread_id' => $paymentreports,
                'text' => $text_report,
                'parse_mode' => "HTML"
            ]);
        }
    }
}
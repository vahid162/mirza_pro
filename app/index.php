<?php
$scriptName = '/' . ltrim(str_replace('\\', '/', (string) ($_SERVER['SCRIPT_NAME'] ?? '/app/index.php')), '/');
$botBasePath = rtrim(dirname($scriptName, 2), '/');
$appBasePath = $botBasePath . '/app/';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mirza Web App</title>
    <base href="<?= htmlspecialchars($appBasePath, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
    <script>window.MIRZA_BOT_BASE_PATH = <?= json_encode($botBasePath, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES) ?>;</script>
    <script src="./js/telegram-web-app.js"></script>
    <script type="module" crossorigin src="./assets/index-C-2a0Dur.js"></script>
    <link rel="modulepreload" crossorigin href="./assets/vendor-CIGJ9g2q.js">
    <link rel="stylesheet" crossorigin href="./assets/index-BoHBsj0Z.css">
  </head>
  <body>
    <div id="root"></div>
  </body>
</html>

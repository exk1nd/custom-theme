<?php
global $page;
$page = $_SERVER['REQUEST_URI'];

if ($_SERVER['REQUEST_URI'] == '/') {
    $page = '/index.php';
}
$page = substr($page, 1, -4);
require_once('options.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <title>PaydaySay</title>
    <meta name="description" content="<?= $params[$page]['description']; ?>">
    <?php if ($page == 'index') {
        echo '<link rel="canonical" href="https://paydaysay.com/" />';
    } else {
        echo '<link rel="canonical" href="https://paydaysay.com' . $_SERVER['REQUEST_URI'] . '"/>';
    } ?>
    <?= $params[$page]['robots']; ?>
    <link rel="stylesheet" href="/new/css/main.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" data-old-href="https://paydaysay.com/favicon.ico">

</head>
<header id="header">
    <!--<div class="header-bg">
        <div class="container header-top" id="header-top">
            <div class="logo">
                <a href="#">
                    <img src="/images/Payday.svg" loading="lazy" alt="Payday Say" width="250" height="70">
                </a>
            </div>

        </div>
        <hr class="top-hr">
    </div>-->
</header>

<section class="container main-content">
    <center><h3 style="font-size: 32px; margin-top: 80px; line-height: 1.5;">Thank you for submitting your request!</h3>
    </center>
    <br><br>
    <center><span style="font-size: 20px; line-height: 1.5; color: #023881 !important;">Unfortunately, we were unable to verify your identity or you are not within our coverage area.</span>
    </center>
</section>
<footer>
    <div style="margin-top: 80px; padding-bottom: 40px !important;" class="container middle-footer">
        <div>
            <span class="copyright">Your credit score has not been affected.</span>
        </div>
    </div>
</footer>
</body>
</html>
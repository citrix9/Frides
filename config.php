<?php
$db_conn = mysqli_connect('localhost','root','','frides');
require_once 'vendor/autoload.php';
$client = new Google_Client();
$client->setClientId("920346204775-f1vksq0c5e55hpigt7a74qlantppimu0.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setApplicationName("Frides");
$client->setRedirectUri("http://localhost/Frides/login.php");
$client->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

session_start();
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$to = 'robert.a.schneiderman@gmail.com';
$subject = 'email from portfolio';

$name = $_POST['name'];
$firstName = substr($name, 0, strrpos($name, ' '));
$email = $_POST['email'];
$messageReceipt = ' email: ' . $_POST['email'] . 'message: ' . $_POST['message'];  

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
// $headers .= "From: robert.a.schneiderman@gmail.com" . "\r\n";

mail($to,$subject,$messageReceipt,$headers);

// header("Location: http://localhost:8888/portfolio/src/");

?>
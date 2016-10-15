<?php

$to = 'robert.a.schneiderman@gmail.com';

$name = $_POST['name'];
$firstName = substr($name, 0, strrpos($name, ' '));
$email = $_POST['email'];
$messageReceipt = $_POST['message'];  
$messageBody = "Thank you for reaching out to me, " . $firstName . ". I will respond to you via email within 24 hours, and we can set a time to talk over the phone or in person.<br><br>Best,<br>Robert Schneiderman";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: " . $email . "\r\n";

mail($to,$subject,$messageReceipt,$headers);

?>
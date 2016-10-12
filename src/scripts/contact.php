<?php
	require 'phpmailer/PHPMailerAutoload.php';

	// $host  = $_SERVER['HTTP_HOST'];
	// $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

	// echo $host;
	// echo $uri;

	$name = $_POST['name'];
	$firstName = substr($name, 0, strrpos($name, ' '));
	$email = $_POST['email'];
	$messageReceipt = $_POST['message'];	
	$messageBody = "Thank you for reaching out to me, " . $firstName . ". I will respond to you via email within 24 hours, and we can set a time to talk over the phone or in person.<br><br>Best,<br>Robert Schneiderman";

    $htmlEmail = file_get_contents('../dependencies/emails/contacted.htm');
    $search = array('{message}');
    $replace = array("$messageBody");	    
    $messageClient = str_replace($search, $replace, $htmlEmail);

	$mail = new PHPMailer;

	// $mail->SMTPDebug = 3;                               // Enable verbose debug output
	$mail->isMail();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'admin@robertschneiderman.com';                 // SMTP username
	$mail->Password = 'foofpoop1!';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	$mail->addReplyTo('admin@robertschneiderman.com', 'Robert Schneiderman');
	$mail->setFrom('admin@robertschneiderman.com', 'Robert Schneiderman');
	$mail->addAddress($email, $name);     // Add a recipient
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = "Rob Scheiderman - Thanks for reaching out!";
	$mail->MsgHTML($messageClient);		
	$mail->AltBody = $messageClient;

	if(!$mail->send()) {
	    // echo 'Message could not be sent.';
			header('Location: ../?contact=fail&name=' . $name . '&email=' . $email . '&message=' . $messageReceipt);
	} else {
	    // echo 'Message has been sent';
		$mail->ClearAllRecipients(); 
		$mail->ClearReplyTos();
		$mail->ClearCustomHeaders();
		$mail->addReplyTo('admin@robertschneiderman.com', 'Robert Schneiderman');
		$mail->setFrom('admin@robertschneiderman.com', 'Robert Schneiderman');
		$mail->addAddress('robert.a.schneiderman@gmail.com', 'Rob');     // Add a recipient
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $name . ' (' . $email . ')';
		$mail->MsgHTML($messageReceipt);		
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		// header('Location: ../?contact=success');
		if(!$mail->send()) {
		    // echo 'Message could not be sent.';
		    // echo 'Mailer Error: ' . $mail->ErrorInfo;
			header('Location: ../?contact=fail&name=' . $name . '&email=' . $email . '&message=' . $messageReceipt);
		} else {
			header('Location: ../?contact=success&name=' . $name . '&email=' . $email);
		}
	}	

	// http_response_code(200); // PHP 5.4 or greater
?>
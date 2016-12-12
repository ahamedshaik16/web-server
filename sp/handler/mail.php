<?php

require_once('../phpmailer/PHPMailerAutoload.php');
require_once('../phpmailer/class.phpmailer.php');


  function smtpmailer($to,$to_name, $from, $from_name, $subject, $body) { 
	global $error;
	
	$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'technotrendz001@gmail.com';                 // SMTP username
$mail->Password = 'Project$';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'technotrendz001@gmail.com';
$mail->FromName = $from_name;
$mail->addAddress($to, $to);     // Add a recipient

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   // echo 'Message has been sent';
}
}
 
   ?>
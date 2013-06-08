<?php

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
//error_reporting(E_ALL ^ E_NOTICE);
require("../uteis/phpmailer/class.phpmailer.php");

$mail = new PHPMailer();  
 
$mail->IsSMTP();  // telling the class to use SMTP
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "panifsys@gmail.com"; // SMTP username
$mail->Password = "5froick92"; // SMTP password 
 
$mail->From     = "panifsys@gmail.com";
$mail->AddAddress("soulsollem@gmail.com");  
 
$mail->Subject  = "First PHPMailer Message";
$mail->Body     = "Hi! \n\n This is my first e-mail sent through PHPMailer.";
$mail->WordWrap = 50;  
 
if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent.';
}

?>

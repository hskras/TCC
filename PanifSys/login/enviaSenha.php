<?php

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
//error_reporting(E_ALL ^ E_NOTICE);
require("../uteis/phpmailer/class.phpmailer.php");

$mail = new PHPMailer();  
 
$mail->IsSMTP();  // usa SMTP
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth = true; // ativa a autenticação SMTP
$mail->Username = "panifsys@gmail.com"; // usuário SMTP
$mail->Password = "5froick92"; // senha SMTP 
 
$mail->From     = "panifsys@gmail.com";
$mail->AddAddress("soulsollem@gmail.com");  
 
$mail->Subject  = "First PHPMailer Message";
$mail->Body     = "Hi! \n\n This is my first e-mail sent through PHPMailer.";
$mail->WordWrap = 50;  
 
if(!$mail->Send()) {
echo 'Mensagem não enviada.';
echo 'Erro: ' . $mail->ErrorInfo;
} else {
echo 'Mensagem Enviada.';
}

?>

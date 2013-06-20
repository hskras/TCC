<?php

function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false)
{
	$lmin = 'abcdefghijklmnopqrstuvwxyz';
	$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$num = '1234567890';
	$simb = '!@#$%*-';
	$retorno = '';
	$caracteres = '';
	
	$caracteres .= $lmin;
	if ($maiusculas) $caracteres .= $lmai;
	if ($numeros) $caracteres .= $num;
	if ($simbolos) $caracteres .= $simb;
	
	$len = strlen($caracteres);
	for ($n = 1; $n <= $tamanho; $n++) {
		$rand = mt_rand(1, $len);
		$retorno .= $caracteres[$rand-1];
	}
	return $retorno;
}

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
//error_reporting(E_ALL ^ E_NOTICE);
require("../uteis/phpmailer/class.phpmailer.php");
include "../uteis/conexao.php";

$permiteEnvio = 0;

$email = trim($_POST['email_esq']);

$sql = mysql_query("SELECT * FROM clientes where email = '$email'");
$registros = mysql_num_rows($sql); 
if($registros > 0)
{
	$coluna = mysql_fetch_array($sql);
	$login = $coluna['login_cliente'];
	$permiteEnvio = 1;

}else if($registros == 0)
{
	$sql2 = mysql_query("SELECT * FROM funcionarios where email = '$email'");
	$registros2 = mysql_num_rows($sql2); 	
	if($registros2 > 0)
	{
		$coluna = mysql_fetch_array($sql2);
		$login = $coluna['login_funcionario'];
		$permiteEnvio = 1;	
	}
	else $permiteEnvio = 0;
}

if($permiteEnvio == 1)
{
	$novaSenha = geraSenha(8, true, true, true);
	$senha_cripto = sha1($novaSenha);

	mysql_query("UPDATE usuarios_login SET senha = '$senha_cripto' WHERE login = '$login'") or die( mysql_error() );
	
	
	$mail = new PHPMailer();  
	$mail->IsSMTP();  // usa SMTP
	$mail->Mailer = "smtp";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->SMTPAuth = true; // ativa a autenticação SMTP
	$mail->Username = "panifsys@gmail.com"; // usuário SMTP
	$mail->Password = "5froick92"; // senha SMTP 
	 
	$mail->From     = "panifsys@gmail.com";
	$mail->AddAddress("$email");  
	 
	$mail->Subject  = "Acesso ao PanifSys";
	$mail->Body     = "Seus dados para acessar o PanifSys são: \n\n Login: ".$login." \n\n Senha: ".$novaSenha;
	$mail->WordWrap = 50;  
	 
	if(!$mail->Send()) {
	?>
		<script type="text/javascript">
        window.alert("Falha ao enviar o email, tente novamente.");
        history.back();
        </script>        
    <?php
	//header("Location: ../index.php?esqueceuSenha=true");
	//echo 'Mensagem não enviada.';
	//echo 'Erro: ' . $mail->ErrorInfo;
	} else {
		?>
        <script type="text/javascript">
        window.alert("Seus dados para o login foram enviados para o seu email. Você será redirecionado para a página inicial.");
        </script>          
     <?php 
	 header("Location: ../index.php?senhaEnviada=true");  
	//echo 'Mensagem Enviada.';
	}

}else if($permiteEnvio == 0)
{
	echo "<script type='text/javascript'>window.alert('Email não cadastrado!');</script>";
	header("Location: ../index.php?registroInvalido=true");
	
}
?>

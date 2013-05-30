<?php

// A sess�o precisa ser iniciada em cada p�gina diferente
if (!isset($_SESSION)) session_start();

$nivel_necessario = 1;

// Verifica se n�o h� a vari�vel da sess�o que identifica o usu�rio
if (!isset($_SESSION['UsuarioNome']) OR ($_SESSION['UsuarioNivel'] != $nivel_necessario)) {
	// Destr�i a sess�o por seguran�a
	session_destroy();
	// Redireciona o visitante de volta pro login
	header("Location: ../index.php?naoPermitido"); exit;
}

?>

<h1>P�gina restrita</h1>
<p>Ol�, <?php echo $_SESSION['UsuarioNome']; ?>!</p>
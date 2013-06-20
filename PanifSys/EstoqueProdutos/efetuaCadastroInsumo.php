<?php

if (!isset($_SESSION)) session_start();

include "../uteis/conexao.php";

$insumo = trim($_POST['insumo']);

$sql = mysql_query("INSERT INTO insumos (insumo) 
VALUES ('$insumo')") or die( mysql_error() );

if (!$sql){
	echo "Ocorreu algum erro ao cadastrar o insumo.";
}

if($_SESSION['UsuarioNivel'] == 1)
{
	header("Location: ../administrador/layoutAdministrador.php?listarInsumos=true");
}
else if($_SESSION['UsuarioNivel'] == 2)
{
	header("Location: ../funcionario/layoutFuncionario.php?listarInsumos=true");
}
?>
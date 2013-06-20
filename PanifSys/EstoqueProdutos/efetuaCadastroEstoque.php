<?php

if (!isset($_SESSION)) session_start();

include "../uteis/conexao.php";

$insumo = trim($_POST['insumo']);
$quantidade = trim($_POST['quantidade']);
$quantidade_minima = trim($_POST['quantidade_minima']);
$unidade = trim($_POST['unidade']);

$sql = mysql_query("INSERT INTO estoque (id_insumo,quantidade,quantidade_minima,unidade_medida) (SELECT (id_insumo), '$quantidade', '$quantidade_minima', '$unidade' FROM insumos WHERE insumo = '$insumo')") or die( mysql_error() );

if (!$sql){
	echo "Ocorreu algum erro ao adicionar o insumo no estoque.";
}

if($_SESSION['UsuarioNivel'] == 1)
{
	header("Location: ../administrador/layoutAdministrador.php?listarEstoque=true");
}
else if($_SESSION['UsuarioNivel'] == 2)
{
	header("Location: ../funcionario/layoutFuncionario.php?listarEstoque=true");
}
?>
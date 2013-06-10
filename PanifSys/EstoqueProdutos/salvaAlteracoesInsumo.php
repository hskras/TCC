<?php

if (!isset($_SESSION)) session_start();
include "../uteis/conexao.php";

$id_insumo = $_GET['editarInsumo'];
$insumo = trim($_POST['insumo']);
$quantidade = trim($_POST['quantidade']);
$quantidade_minima = trim($_POST['quantidade_minima']);
$unidade = trim($_POST['unidade']);

if(@mysql_query("UPDATE estoque SET 
insumo = '$insumo',
quantidade = '$quantidade',
quantidade_minima = '$quantidade_minima',
unidade_medida = '$unidade' WHERE
id_insumo = '$id_insumo'")){

	if(mysql_affected_rows() == 1){
		echo "Registro atualizado com sucesso";
	}	

} else {
	if(mysql_errno() == 1062) {
		echo $erros[mysql_errno()];
		exit;
	} else {	
		echo "Erro nao foi possivel efetuar a edição";
		exit;
	}	
	@mysql_close();
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
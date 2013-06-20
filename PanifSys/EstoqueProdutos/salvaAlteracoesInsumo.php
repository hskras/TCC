<?php

if (!isset($_SESSION)) session_start();
include "../uteis/conexao.php";

$id_insumo = $_GET['editarInsumo'];
$insumo = trim($_POST['insumo']);

if(@mysql_query("UPDATE insumos SET insumo = '$insumo' WHERE id_insumo = '$id_insumo'")){

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
	header("Location: ../administrador/layoutAdministrador.php?listarInsumos=true");
}
else if($_SESSION['UsuarioNivel'] == 2)
{
	header("Location: ../funcionario/layoutFuncionario.php?listarInsumos=true");
}

?>
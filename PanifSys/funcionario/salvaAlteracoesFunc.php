<?php

if (!isset($_SESSION)) session_start();
include "../uteis/conexao.php";

$nome = trim($_POST['nome']);
$telefone = trim($_POST['telefone']);
$celular = trim($_POST['celular']);
$email = trim($_POST['email']);
$login = trim($_POST['login']);
$senha = trim($_POST['senha']);

if($senha != "") $senha_cripto = sha1($senha);

$idfunc = $_GET['id'];

if(@mysql_query("UPDATE funcionarios SET nome = '$nome', telefone = '$telefone', celular = '$celular', email = '$email' WHERE login_funcionario = '$login'")){

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

	if($senha != ""){
		if(@mysql_query("UPDATE usuarios_login SET senha = '$senha_cripto' WHERE login = '$login'")){
		
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
	}
	@mysql_close();
}

if($_SESSION['UsuarioNivel'] == 1)
{
	header("Location: ../administrador/layoutAdministrador.php?listarFuncionarios=true");
} else if ($_SESSION['UsuarioNivel'] == 2)
{
	header("Location: layoutFuncionario.php?inicioFuncionarios=true");
}
?>
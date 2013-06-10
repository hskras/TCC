<?php

include "../uteis/conexao.php";

$nome = trim($_POST['nome']);
$telefone = trim($_POST['telefone']);
$celular = trim($_POST['celular']);
$cpf = trim($_POST['cpf']);
$email = trim($_POST['email']);
$login = trim($_POST['login']);
$senha = trim($_POST['senha']);

$senha_cripto = sha1($senha);

$sql = mysql_query("INSERT INTO funcionarios (nome,telefone,celular,email,login_funcionario) 
VALUES ('$nome','$telefone','$celular','$email','$login')") or die( mysql_error() );

$sql2 = mysql_query("INSERT INTO usuarios_login (login,senha,nivel_acesso,ativo) VALUES ('$login','$senha_cripto','2','1')") or die( mysql_error() );

if (!$sql || !$sql2){
	echo "Erro ao criar conta do funcionário.";
}

header("Location: ../administrador/layoutAdministrador.php?listarFuncionarios=true");

?>
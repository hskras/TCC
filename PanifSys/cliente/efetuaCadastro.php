<?php

if (!isset($_SESSION)) session_start();

include "../uteis/conexao.php";

$nome = trim($_POST['nome']);
$telefone = trim($_POST['telefone']);
$celular = trim($_POST['celular']);
$dataNascimento = trim($_POST['dataNascimento']);
$cpf = trim($_POST['cpf']);
$email = trim($_POST['email']);
$cep = trim($_POST['cep']);
$endereco = trim($_POST['endereco']);
$numero = trim($_POST['numero']);
$bairro = trim($_POST['bairro']);
$complemento = trim($_POST['complemento']);
$cidade = trim($_POST['cidade']);
$estado = trim($_POST['estado']);
$login = trim($_POST['login']);
$senha = trim($_POST['senha']);

$senha_cripto = sha1($senha);

$sql = mysql_query("INSERT INTO clientes (nome,cpf,data_nascimento,endereco,numero,cidade,estado,cep,complemento,bairro,telefone,celular,email,login_cliente) 
VALUES ('$nome', '$cpf', '$dataNascimento', '$endereco', '$numero','$cidade','$estado','$cep','$complemento','$bairro','$telefone','$celular','$email','$login')") or die( mysql_error() );

$sql2 = mysql_query("INSERT INTO usuarios_login (login,senha,nivel_acesso,ativo) VALUES ('$login','$senha_cripto','3','1')") or die( mysql_error() );

if (!$sql || !$sql2){
	echo "Ocorreu algum erro ao criar sua conta, por favor entre em contato com o Administrador.";
}

if(!isset($_SESSION['UsuarioNome']))
{
	header("Location: ../index.php?cadastrado=true");
}
else if($_SESSION['UsuarioNivel'] == 1)
{
	header("Location: ../administrador/layoutAdministrador.php?listarClientes=true");
}
?>
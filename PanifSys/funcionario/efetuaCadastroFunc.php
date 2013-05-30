<?php

include "../uteis/conexao.php";

$nome = trim($_POST['nome']);
$telefone = trim($_POST['telefone']);
$celular = trim($_POST['celular']);
$sexo = trim($_POST['sexo']);
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
$dataAdmissao = trim($_POST['dataAdmissao']);
$estadoCivil = trim($_POST['estadoCivil']);
$cargo = trim($_POST['cargo']);

$senha_cripto = sha1($senha);

$sql = mysql_query("INSERT INTO funcionarios (nome,sexo,cpf,data_nascimento,endereco,numero,cidade,estado,cep,complemento,bairro,telefone,celular,email,login_funcionario,data_admissao,estado_civil,cargo) 
VALUES ('$nome', '$sexo', '$cpf', '$dataNascimento', '$endereco', '$numero','$cidade','$estado','$cep','$complemento','$bairro','$telefone','$celular','$email','$login','dataAdmissao','estadoCivil','cargo')") or die( mysql_error() );

$sql2 = mysql_query("INSERT INTO usuarios_login (login,senha,nivel_acesso,ativo) VALUES ('$login','$senha_cripto','2','1')") or die( mysql_error() );

if (!$sql || !$sql2){
	echo "Erro ao criar conta do funcionário.";
}

header("Location: ../administrador/layoutAdministrador.php?cadastrado=true");

?>
<?php

if (!isset($_SESSION)) session_start();
include "../uteis/conexao.php";

$nome = trim($_POST['nome']);
$telefone = trim($_POST['telefone']);
$celular = trim($_POST['celular']);
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

if($senha != "") $senha_cripto = sha1($senha);

if(@mysql_query("UPDATE clientes SET 
nome = '$nome',
cpf = '$cpf',
endereco = '$endereco',
numero = '$numero',
cidade = '$cidade',
estado = '$estado',
cep = '$cep',
complemento = '$complemento',
bairro = '$bairro',
telefone = '$telefone',
celular = '$celular',
email = '$email' WHERE
login_cliente = '$login'")){

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

if($senha != "")
{
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
		@mysql_close();
	}
} //fim if senha

if($_SESSION['UsuarioNivel'] == 3)
{
	header("Location: layoutCliente.php?alteracao=true");
}
else if($_SESSION['UsuarioNivel'] == 1)
{
	header("Location: ../administrador/layoutAdministrador.php?listarClientes=true");
}
else if($_SESSION['UsuarioNivel'] == 2)
{
	header("Location: ../funcionario/layoutFuncionario.php?listarClientes=true");
}

?>
<?php

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
	header("Location: ../index.php?inicio=true"); 
	exit;
}

@include ('../uteis/conexao.php');

$usuario = mysql_real_escape_string($_POST['usuario']);
$senha = mysql_real_escape_string($_POST['senha']);

// Validação do usuário/senha digitados
$sql = "SELECT login, nivel_acesso FROM usuarios_login WHERE login = '$usuario' AND senha = '". sha1($senha) ."' AND ativo = 1 LIMIT 1";
$query = mysql_query($sql);
if (mysql_num_rows($query) != 1) 
{
	// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
	echo "Login invalido!"; 
	header("Location: ../index.php?inicio");
	exit;
} else {
	// Salva os dados encontados na variável $resultado
	$resultado = mysql_fetch_assoc($query);

	if($resultado['nivel_acesso'] == 1){ 
	 	$sql2 = "select * from funcionarios where login_funcionario = '$usuario'";
		$query2 = mysql_query($sql2);
		$resultado2 = mysql_fetch_assoc($query2);	
	}
	else if($resultado['nivel_acesso'] == 2){
	 	$sql2 = "select * from funcionarios where login_funcionario = '$usuario'";
		$query2 = mysql_query($sql2);
		$resultado2 = mysql_fetch_assoc($query2);	
	}
	else if($resultado['nivel_acesso'] == 3){
	 	$sql2 = "select * from clientes where login_cliente = '$usuario'";
		$query2 = mysql_query($sql2);
		$resultado2 = mysql_fetch_assoc($query2);	
	}

	// Se a sessão não existir, inicia uma
	if (!isset($_SESSION)) session_start();

	// Salva os dados encontrados na sessão
	$_SESSION['UsuarioNome'] = $resultado2['nome'];
	$_SESSION['UsuarioLogin'] = $resultado['login'];
	$_SESSION['UsuarioNivel'] = $resultado['nivel_acesso'];

	// Redireciona o usuario
	if ($resultado['nivel_acesso'] == 1) {
		header("Location: ../administrador/layoutAdministrador.php"); exit;
	} elseif ($resultado['nivel_acesso'] == 2) {
		header("Location: ../funcionario/layoutFuncionario.php"); exit;
	} elseif ($resultado['nivel_acesso'] == 3) {
		header("Location: ../cliente/layoutCliente.php"); exit;
	}
	
	exit;
}

?>
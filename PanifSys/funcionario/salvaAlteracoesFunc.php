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

$idfunc = $_GET['id'];

if(@mysql_query("UPDATE funcionarios SET 
nome = '$nome',
sexo = '$sexo',
cpf = '$cpf',
data_nascimento = '$dataNascimento',
endereco = '$endereco',
numero = '$numero',
cidade = '$cidade',
estado = '$estado',
cep = '$cep',
complemento = '$complemento',
bairro = '$bairro',
telefone = '$telefone',
celular = '$celular',
email = '$email',
data_admissao = '$dataAdmissao',
estado_civil = '$estadoCivil',
cargo = '$cargo',
login_funcionario = '$login' WHERE id_funcionario='$idfunc'")){

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

header("Location: ../administrador/layoutAdministrador.php?alteracao=true");

?>
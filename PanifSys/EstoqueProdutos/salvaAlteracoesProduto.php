<?php

if (!isset($_SESSION)) session_start();
include "../uteis/conexao.php";

$id_produto = $_GET['editarProduto'];
$produto = trim($_POST['produto']);
$descricao = trim($_POST['descricao']);
$preco = trim($_POST['preco']);
$imagem = $_FILES["imagem"];

error_reporting(0);

	// Se a foto estiver sido selecionada
	if (!empty($imagem["name"])) {
		
		// Largura máxima em pixels
		$largura = 300;
		// Altura máxima em pixels
		$altura = 300;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 3000;

    	// Verifica se o arquivo é uma imagem
    	if(!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $imagem["type"])){ //eregi
     	   $error[1] = "Não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($imagem["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($arquivo["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}

		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "Uploads/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

			
		}
	
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	} //if da imagem vazia
	else $nome_imagem = "";


if(@mysql_query("UPDATE produtos SET 
produto = '$produto',
descricao = '$descricao',
preco = '$preco',
imagem = '$nome_imagem' WHERE
id_produto = '$id_produto'")){

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
	header("Location: ../administrador/layoutAdministrador.php?listarProdutos=true");
}
else if($_SESSION['UsuarioNivel'] == 2)
{
	header("Location: ../funcionario/layoutFuncionario.php?listarProdutos=true");
}

?>
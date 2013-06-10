<?php

if (!isset($_SESSION)) session_start();

include "../uteis/conexao.php";

$produto = trim($_POST['produto']);
$descricao = trim($_POST['descricao']);
$preco = trim($_POST['preco']);
$imagem = $_FILES["imagem"];

error_reporting(0);

	// Se a foto estiver sido selecionada
	if (!empty($imagem["name"])) {
		
		// Largura máxima em pixels
		$largura = 200;
		// Altura máxima em pixels
		$altura = 200;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000;

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
	 
	// Insere os dados no banco			
	$sql = mysql_query("INSERT INTO produtos (produto,descricao,preco,imagem) 
			VALUES ('$produto', '$descricao', '$preco', '$nome_imagem')") or die( mysql_error() );
			
		if (!$sql){
			echo "Ocorreu algum erro ao criar o produto, por favor entre em contato com o Administrador.";
		}
			
		if($_SESSION['UsuarioNivel'] == 1)
		{
			header("Location: ../administrador/layoutAdministrador.php?listarProdutos=true");
		}
		else if($_SESSION['UsuarioNivel'] == 2)
		{
			header("Location: ../funcionario/layoutFuncionario.php?listarProdutos=true");
		}
			
		// Se os dados forem inseridos com sucesso
		if ($sql){
			echo "Você foi cadastrado com sucesso.";
		}
			
?>
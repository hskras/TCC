<?php

include "../uteis/conexao.php";

$idproduto = $_GET['excluir'];

$sql0 = mysql_query("SELECT imagem FROM produtos WHERE id_produto = '$idproduto'");
$coluna = mysql_fetch_array($sql0);

// Removendo imagem da pasta Uploads/
unlink("/Uploads/".$coluna['imagem']."");

$sql = mysql_query("DELETE FROM produtos WHERE id_produto = '$idproduto'") or die( mysql_error() );

header("Location: ../administrador/layoutAdministrador.php?listarProdutos=true");

?>

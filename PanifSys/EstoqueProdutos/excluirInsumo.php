<?php

include "../uteis/conexao.php";

$idinsumo = $_GET['excluir'];

$sql = mysql_query("DELETE FROM estoque where id_insumo = '$idinsumo'") or die( mysql_error() );

header("Location: ../administrador/layoutAdministrador.php?listarEstoque=true");


?>

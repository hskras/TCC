<?php

include "../uteis/conexao.php";

$idinsumo = $_GET['excluir'];

$sql = mysql_query("DELETE FROM insumos where id_insumo = '$idinsumo'") or die( mysql_error() );

header("Location: ../administrador/layoutAdministrador.php?listarInsumos=true");


?>

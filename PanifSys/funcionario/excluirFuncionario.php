<?php

include "../uteis/conexao.php";

$idfunc = $_GET['excluir'];

$sql0 = mysql_query("SELECT * FROM funcionarios where id_funcionario = '$idfunc'");
$coluna = mysql_fetch_array($sql);
$login = $coluna['login_funcionario'];

$sql = mysql_query("DELETE FROM funcionarios where id_funcionario = '$idfunc'");

$sql2 = mysql_query("DELETE FROM usuarios_login where login = '$login'");

//$nomefunc = $coluna['nome'];

header("Location: ../administrador/layoutAdministrador.php?listarFuncionarios=true");

?>

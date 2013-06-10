<?php

include "../uteis/conexao.php";

$idcli = $_GET['excluir'];

$sql0 = mysql_query("SELECT * FROM clientes where id_cliente = '$idcli'");
$coluna = mysql_fetch_array($sql0);
$login = $coluna['login_cliente'];

$sql = mysql_query("DELETE FROM clientes where id_cliente = '$idcli'") or die( mysql_error() );

$sql2 = mysql_query("DELETE FROM usuarios_login where login = '$login'") or die( mysql_error() );

//$nomefunc = $coluna['nome'];

if($_SESSION['UsuarioNivel'] == 1){
header("Location: ../administrador/layoutAdministrador.php?listarClientes=true");
}
else if($_SESSION['UsuarioNivel'] == 2){
header("Location: ../funcionario/layoutFuncionario.php?listarClientes=true");
}

?>

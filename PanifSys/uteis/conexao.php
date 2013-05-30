<?php 

$conexao = mysql_connect('127.0.0.1','root',''); 

if (!$conexao) { 
	die('Não foi possível se conectar ao MySQL: ' . mysql_error()); 
} 

mysql_select_db("panifsys",$conexao) or die ("Não foi possível se conectar ao banco");

?> 
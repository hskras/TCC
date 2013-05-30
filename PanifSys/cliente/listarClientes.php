<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include "../uteis/conexao.php" ?>
<style type="text/css">
#form1 table tr td strong {
	color: #003;
}

</style>

<link href="../default.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="fundo"> 

<div align="center"><strong>Usuários Cadastrados</strong><br />
  <br />
</div>
<div id="usuariosBD">

<table width="100%" border="0">
<tr>
    <td width="79%" align="left"><a href="../administrador/layoutAdministrador.php?cadastrarCliente=true">Inserir Novo Cliente</a></td>
    
  </tr>
  <tr>
    <td width="79%" align="center">&nbsp;</td>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  </table>
  <table width="100%" border="1">
  <tr>

    <td width="79%" align="center">Clientes</td>
    <td colspan="2" align="center">Ação</td>
  </tr>
  
  <?php 
  	$sql = mysql_query("SELECT * FROM clientes ORDER BY nome");
	$registros = mysql_num_rows($sql); 
  	while($coluna = mysql_fetch_array($sql)){
		$id_cliente = $coluna['id_cliente'];
	?>
  
  <tr>
    <td><?php echo $coluna['nome'] ?> </td>
    <td width="10%" align="center"><a href="../administrador/layoutAdministrador.php?editarCliente=<?php echo $coluna['id_cliente'] ?>">Alterar</a></td>
    <td width="11%" align="center"><a href="../administrador/layoutAdministrador.php?excluirCliente=<?php echo $coluna['id_cliente'] ?>">Excluir</a></td>
  </tr>
  <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Total de clientes cadastrados: <?php echo $registros ?></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</div>
</body>
</html>
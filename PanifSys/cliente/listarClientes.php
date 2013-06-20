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

<div align="center"><strong>Clientes Cadastrados</strong><br />
  <br />
</div>
<div id="usuariosBD">

<table width="100%" border="0">
<tr>

	<?php if($_SESSION['UsuarioNivel'] == 1){ ?>
    <td width="79%" align="left"><a href="../administrador/layoutAdministrador.php?cadastrarCliente=true">Inserir Novo Cliente</a></td>
    <?php } else if($_SESSION['UsuarioNivel'] == 2){ ?>
    <td width="79%" align="left"><a href="../funcionario/layoutFuncionario.php?cadastrarCliente=true">Inserir Novo Cliente</a></td>
    <?php } ?>
    
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="left"><form id="form1" name="form1" method="post" action="layoutAdministrador.php?pesquisarCliente">
      <label for="buscaCliente"></label>
      <input name="buscaCliente" type="text" id="buscaCliente" size="40" maxlength="40" />
      <input type="submit" name="pesquisar" id="pesquisar" value="Pesquisar" />
    </form></td>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="79%" align="center">&nbsp;</td>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  </table>
  <table width="100%" border="1">
  <tr>

    <td width="43%" align="center">Nome</td>
    <td width="20%" align="center">Telefone</td>
    <td width="16%" align="center">Login</td>
    <td colspan="2" align="center">Ação</td>
  </tr>
	
	<?php if ($pesqCliente == ""){ ?>
  
  	<?php 
  	$sql = mysql_query("SELECT * FROM clientes ORDER BY nome");
	$registros = mysql_num_rows($sql); 
  	while($coluna = mysql_fetch_array($sql)){
		$id_cliente = $coluna['id_cliente'];
	?>
  <tr>
    <td><?php echo $coluna['nome'] ?> </td>
    <td><?php echo $coluna['telefone'] ?> </td>
    <td><?php echo $coluna['login_cliente'] ?> </td>
   
   
   
    <?php if($_SESSION['UsuarioNivel'] == 1){ ?>
    <td width="10%" align="center"><a href="../administrador/layoutAdministrador.php?editarCliente=<?php echo $coluna['id_cliente'] ?>">Alterar</a></td>
   <?php } else if($_SESSION['UsuarioNivel'] == 2){ ?>
    <td width="10%" align="center"><a href="../funcionario/layoutFuncionario.php?editarCliente=<?php echo $coluna['id_cliente'] ?>">Alterar</a></td>
   <?php } ?>
      
    <td width="11%" align="center"><a href="../cliente/excluirCliente.php?excluir=<?php echo $coluna['id_cliente'] ?>" onclick="return confirm('Tem certeza que deseja excluir esse cliente?')">Excluir</a></td>
  
  </tr>
  <?php } } else {
	
  	$sql = mysql_query("SELECT * FROM clientes where nome like '%$pesqCliente%' ORDER BY nome");
	$registros = mysql_num_rows($sql); 
  	while($coluna = mysql_fetch_array($sql)){
		$id_cliente = $coluna['id_cliente']; ?>
<tr>
	<?php if($registros > 0) {
	  ?>
      <td><?php echo $coluna['nome'] ?> </td>
      <td><?php echo $coluna['telefone'] ?> </td>
      <td><?php echo $coluna['login_cliente'] ?> </td>
      <?php } else { echo "Não foi encontrado nenhum cliente com esse nome"; } ?>
    
    <?php if($_SESSION['UsuarioNivel'] == 1){ ?>
    <td width="10%" align="center"><a href="../administrador/layoutAdministrador.php?editarCliente=<?php echo $coluna['id_cliente'] ?>">Alterar</a></td>
   <?php } else if($_SESSION['UsuarioNivel'] == 2){ ?>
    <td width="10%" align="center"><a href="../funcionario/layoutFuncionario.php?editarCliente=<?php echo $coluna['id_cliente'] ?>">Alterar</a></td>
   <?php } ?>
      
    <td width="11%" align="center"><a href="../cliente/excluirCliente.php?excluir=<?php echo $coluna['id_cliente'] ?>" onclick="return confirm('Tem certeza que deseja excluir esse cliente?')">Excluir</a></td>
     </tr>
    <?php } } ?>
    
 
  
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">Total de clientes: <?php echo $registros ?></td>

  </tr>
</table>
</div>
</div>
</body>
</html>
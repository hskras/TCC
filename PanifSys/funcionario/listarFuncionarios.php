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

<div align="center"><strong>Funcionários Cadastrados</strong><br />
  <br />
</div>
<div id="usuariosBD">

<table width="100%" border="0">
<tr>
    <td width="79%" align="left"><a href="../administrador/layoutAdministrador.php?cadastrarFuncionario=true">Inserir Novo Funcionário</a></td>
    
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="left"><form id="form1" name="form1" method="post" action="layoutAdministrador.php?pesquisarFuncionario">
      <label for="buscaFuncionario"></label>
      <input name="buscaFuncionario" type="text" id="buscaFuncionario" size="40" maxlength="40" />
      <input type="submit" name="pesquisarFunc" id="pesquisarFunc" value="Pesquisar" />
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

    <td width="37%" align="center">Nome</td>
    <td width="15%" align="center">Telefone</td>
    <td width="13%" align="center">Celular</td>
    <td width="14%" align="center">Login</td>
    <td colspan="2" align="center">Ação</td>
  </tr>
  
  
  <?php if ($pesqFuncionario == ""){ ?>
  
  <?php 
  	$sql = mysql_query("SELECT * FROM funcionarios ORDER BY nome");
	$registros = mysql_num_rows($sql); 
  	while($coluna = mysql_fetch_array($sql)){
		$id_func = $coluna['id_funcionario'];
		
	?>
  <tr>
  
    <td><?php echo $coluna['nome'] ?> </td>
    <td><?php echo $coluna['telefone'] ?> </td>
    <td><?php echo $coluna['celular'] ?> </td>
    <td><?php echo $coluna['login_funcionario'] ?> </td>
    
    <td width="10%" align="center"><a href="../administrador/layoutAdministrador.php?editarFuncionario=<?php echo $coluna['id_funcionario'] ?>">Alterar</a></td>
    <td width="11%" align="center"><a href="../funcionario/excluirFuncionario.php?excluir=<?php echo $coluna['id_funcionario'] ?>"  onclick="return confirm('Tem certeza que deseja excluir esse funcionario?')">Excluir</a></td>
  
  </tr>
  <?php } } else { 
  
  	$sql = mysql_query("SELECT * FROM funcionarios where nome like '%$pesqFuncionario%' ORDER BY nome");
	$registros = mysql_num_rows($sql); 
  	while($coluna = mysql_fetch_array($sql)){
		$id_cliente = $coluna['id_funcionario']; ?>
	<tr>
	<?php	if($registros > 0) {
	  ?>
      
    <td><?php echo $coluna['nome'] ?> </td>
    <td><?php echo $coluna['telefone'] ?> </td>
    <td><?php echo $coluna['celular'] ?> </td>
    <td><?php echo $coluna['login_funcionario'] ?> </td>
    <?php } else { echo "Não foi encontrado nenhum funcionario com esse nome"; } ?>
    
    <td width="10%" align="center"><a href="../administrador/layoutAdministrador.php?editarFuncionario=<?php echo $coluna['id_funcionario'] ?>">Alterar</a></td>
    <td width="11%" align="center"><a href="../funcionario/excluirFuncionario.php?excluir=<?php echo $coluna['id_funcionario'] ?>"  onclick="return confirm('Tem certeza que deseja excluir esse funcionario?')">Excluir</a></td>
  
  </tr>
  <?php } } ?>
    
  
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6">Total de funcionários: <?php echo $registros ?></td>

  </tr>
</table>
</div>
</div>
</body>
</html>
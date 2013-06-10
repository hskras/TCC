<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Produtos</title>
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

<div align="center"><strong>Produtos</strong><br />
  <br />
</div>
<div id="produtosBD">

<table width="100%" border="0">
<tr>

	<?php if($_SESSION['UsuarioNivel'] == 1){ ?>
    <td width="79%" align="left"><a href="../administrador/layoutAdministrador.php?cadastrarProdutos=true">Inserir Novo Produto</a></td>
    <?php } else if($_SESSION['UsuarioNivel'] == 2){ ?>
    <td width="79%" align="left"><a href="../funcionario/layoutFuncionario.php?cadastrarProdutos=true">Inserir Novo Produto</a></td>
    <?php } ?>
    
  </tr>
  <tr>
    <td width="79%" align="center">&nbsp;</td>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  </table>
  <table width="100%" border="1">
  <tr>

    <td width="30%" align="center">Produtos</td>
    <td width="33%" align="center">Descrição</td>
    <td width="16%" align="center">Preço</td>
    <td colspan="2" align="center">Ação</td>
  </tr>
  
  <?php 
  	$sql = mysql_query("SELECT * FROM produtos ORDER BY produto");
	$registros = mysql_num_rows($sql); 
  	while($coluna = mysql_fetch_array($sql)){
		$id_produto = $coluna['id_produto'];
	?>
  
  <tr>
    <td><?php echo $coluna['produto'] ?> </td>
    <td><?php echo $coluna['descricao'] ?> </td>
    <td><?php echo $coluna['preco'] ?> R$</td>
   
    <?php if($_SESSION['UsuarioNivel'] == 1){ ?>
    <td width="10%" align="center"><a href="../administrador/layoutAdministrador.php?editarProdutos=<?php echo $coluna['id_produto'] ?>">Alterar</a></td>
   <?php } ?>
       
    <td width="11%" align="center"><a href="../EstoqueProdutos/excluirProduto.php?excluir=<?php echo $coluna['id_produto'] ?>" onclick="return confirm('Tem certeza que deseja excluir esse produto?')">Excluir</a></td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">Total de produtos: <?php echo $registros ?></td>

  </tr>
</table>
</div>
</div>
</body>
</html>
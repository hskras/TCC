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

<div align="center"><strong>Estoque</strong><br />
  <br />
</div>
<div id="produtosBD">

<table width="100%" border="0">
<tr>
    <td width="79%" align="left"><a href="../administrador/layoutAdministrador.php?cadastrarInsumo=true">Inserir Novo Insumo</a></td>   
  </tr>
  <tr>
    <td width="79%" align="center">&nbsp;</td>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  </table>
  <table width="100%" border="1">
  <tr>

    <td width="43%" align="center">Insumo</td>
    <td width="20%" align="center">Quantidade</td>
    <td width="16%" align="center">Quantidade Mínima</td>
    <td colspan="2" align="center">Ação</td>
  </tr>
  
  <?php 
  	$sql = mysql_query("SELECT * FROM estoque ORDER BY insumo");
	$registros = mysql_num_rows($sql); 
  	while($coluna = mysql_fetch_array($sql)){
		$id_insumo = $coluna['id_insumo'];
	?>
  
  <tr>
    <td><?php echo $coluna['insumo'] ?> </td>
    <td><?php echo $coluna['quantidade']." ".$coluna['unidade_medida'] ?> </td>
    <td><?php echo $coluna['quantidade_minima']." ".$coluna['unidade_medida'] ?> </td>
   
    <td width="10%" align="center"><a href="../administrador/layoutAdministrador.php?editarInsumo=<?php echo $coluna['id_insumo'] ?>">Alterar</a></td>
      
    <td width="11%" align="center"><a href="../EstoqueProdutos/excluirInsumo.php?excluir=<?php echo $coluna['id_insumo'] ?>" onclick="return confirm('Tem certeza que deseja excluir esse insumo?')">Excluir</a></td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">Total de Insumos: <?php echo $registros ?></td>

  </tr>
</table>
</div>
</div>
</body>
</html>
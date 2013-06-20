
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrar Cliente</title>

<?php if (!isset($_SESSION)) session_start(); ?>
<?php include "../uteis/validaFormProdutos.js" ?>
<style type="text/css">
#form1 table tr td strong {
	color: #003;
}

</style>

<link href="../default.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="fundoinsumo">

<div class="formulario">

<form name="frmCadProduto" id="formularioproduto" method="post" action="../EstoqueProdutos/efetuaCadastroProduto.php" enctype="multipart/form-data" onsubmit="return validaFormProd(this,1);" >

   <table width="100%" border="0">
    <tr>
      <td colspan="3" align="center"><strong>Novo Produto</strong></td>
      </tr>
    <tr>
      <td width="27%">&nbsp;</td>
      <td width="61%">&nbsp;</td>
      <td width="12%">&nbsp;</td>
      
    </tr>
    <tr>
      <td align="right">*Produto:</td>
      <td><label for="produto"></label>
        <input name="produto" type="text" id="produto" value="" size="50" maxlength="50" /></td>
      <td align="right">&nbsp;</td>
      
    </tr>
    <tr>
      <td align="right">Descrição:</td>
      <td><label for="descricao"></label>
        <input name="descricao" type="text" id="descricao" size="50" maxlength="50" /></td>
      
      <td align="right">&nbsp;</td>
      
    </tr>
    <tr>
      <td align="right">*Preço:</td>
      <td><label for="preco"></label>
        <input name="preco" type="text" id="preco" size="10" maxlength="10" style="text-align:right" /> 
        R$</td>
      <td>&nbsp;</td>
      
      </tr>
    <tr>
      <td align="right">Imagem:</td>
      <td><label for="imagem"></label>
        <input type="file" name="imagem" id="imagem" /></td>
      <td>&nbsp;</td>
      
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3" align="center"><input type="submit" name="enviar" id="enviar" value="Efetivar Cadastramento" /></td>
    </tr>
  </table>
</form>

</div>
</div>

</body>
</html>
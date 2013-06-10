
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrar Cliente</title>

<?php if (!isset($_SESSION)) session_start(); ?>
<?php include "../uteis/validaFormInsumo.js" ?>
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

<form name="frmCadInsumo" id="formularioinsumo" method="post" action="../EstoqueProdutos/efetuaCadastroInsumo.php" >

   <table width="100%" border="0">
    <tr>
      <td colspan="3" align="center"><strong>Novo Insumo</strong></td>
      </tr>
    <tr>
      <td width="27%">&nbsp;</td>
      <td width="61%">&nbsp;</td>
      <td width="12%">&nbsp;</td>
      
    </tr>
    <tr>
      <td align="right">*Insumo:</td>
      <td><label for="insumo"></label>
        <input name="insumo" type="text" id="insumo" value="" size="50" maxlength="50" /></td>
      <td align="right">&nbsp;</td>
      
    </tr>
    <tr>
      <td align="right">*Quantidade no Estoque:</td>
      <td><label for="quantidade"></label>
        <input type="text" name="quantidade" id="quantidade" size="10" maxlength="10" /></td>
      
      <td align="right">&nbsp;</td>
      
    </tr>
    <tr>
      <td align="right">*Quantidade Mínima:</td>
      <td><label for="quantidade_minima"></label>
        <input type="text" name="quantidade_minima" id="quantidade_minima" size="10" maxlength="10" /></td>
      <td>&nbsp;</td>
      
      </tr>
    <tr>
      <td align="right">*Unidade de Medida:</td>
      <td><label for="unidade"></label>
        <select name="unidade" id="unidade">
        	<option>Selecione</option>
            <option value="Unidades">Unidades</option>
            <option value="Caixas">Caixas</option>
            <option value="Litros">Litros</option>
            <option value="Mililitros">Mililitros</option>
            <option value="Kilogramas">Kilogramas</option>
            <option value="Gramas">Gramas</option>
        </select></td>
      <td>&nbsp;</td>
      
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3" align="center"><input type="submit" name="enviar" id="enviar" value="Efetivar Cadastramento" onclick="return alert('Insumo adicionado!')" /></td>
    </tr>
  </table>
</form>

</div>
</div>

</body>
</html>
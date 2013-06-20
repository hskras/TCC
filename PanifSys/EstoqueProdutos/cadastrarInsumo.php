
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrar Cliente</title>

<?php if (!isset($_SESSION)) session_start(); ?>

<style type="text/css">
#form1 table tr td strong {
	color: #003;
}

</style>

<link href="../default.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function validaFormIns(frm,acao) {

	if(frm.insumo.value == "" || frm.insumo.value == null || frm.insumo.value.length < 3) {
		alert("Preencha o nome do insumo!");
		frm.insumo.focus(); //coloca foco no campo			
		return false; //não deixa enviar o form
	}
	if(acao == 1) alert('Insumo incluido com sucesso.');
	else if(acao == 2) alert('Insumo alterado com sucesso.');
	return true;
}
</script>

</head>

<body>

<div id="fundoinsumo">

<div class="formulario">

<form name="frmCadInsumo" id="formularioinsumo" method="post" action="../EstoqueProdutos/efetuaCadastroInsumo.php" onsubmit="return validaFormIns(this,1);">

   <table width="100%" border="0">
    <tr>
      <td colspan="3" align="center"><strong>Novo Insumo</strong></td>
      </tr>
    <tr>
      <td width="34%">&nbsp;</td>
      <td width="48%">&nbsp;</td>
      <td width="12%">&nbsp;</td>
      
    </tr>
    <tr>
      <td align="right">*Insumo:</td>
      <td><label for="insumo"></label>
        <input name="insumo" type="text" id="insumo" value="" size="50" maxlength="50" /></td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td colspan="5" align="center"><input type="submit" name="enviar" id="enviar" value="Efetivar Cadastramento" /></td>
      </tr>
  </table>
</form>

</div>
</div>

</body>
</html>
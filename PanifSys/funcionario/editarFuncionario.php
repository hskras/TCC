
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrar Cliente</title>

<style type="text/css">
#form1 table tr td strong {
	color: #003;
}

</style>

<link href="../default.css" rel="stylesheet" type="text/css" />
<? include "../uteis/conexao.php" ?>
<?php include "../uteis/mascaras.js" ?>
</head>

<body>

<?php
$lg = $funcionarioAltera;
$sql = mysql_query("SELECT * FROM funcionarios where id_funcionario = '$lg'");
$coluna = mysql_fetch_array($sql);
$loginFuncionario = $coluna['login_funcionario'];

$sql2 = mysql_query("SELECT * FROM usuarios_login where login = '$loginFuncionario'");
$coluna2 = mysql_fetch_array($sql2);
 
?>

<div id="fundocli">

<div class="formulario">

<form name="frmCadFuncionario" id="formulariofuncionario" method="post" action="../funcionario/salvaAlteracoesFunc.php?id=<?php echo $coluna['id_funcionario'] ?>" onsubmit="return validaForm(this,2);">
   <table width="100%" border="0">
    <tr>
      <td width="9%">&nbsp;</td>
      <td colspan="3" align="center"><strong>Editar Funcionário</strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="24%">&nbsp;</td>
      <td width="14%">&nbsp;</td>
      <td width="23%">&nbsp;</td>
    </tr>
    <tr>
      <td align="right">*Nome Completo:</td>
      <td><label for="nome"></label>
      <input name="nome" type="text" id="nome" value="<?php echo $coluna['nome'] ?>" size="50" maxlength="50" /></td>
      <td align="right">&nbsp;</td>
      <td><label for="sexo"></label></td>
    </tr>
    <tr>
      <td align="right">*CPF:</td>
      <td><input name="cpf" type="text" id="cpf" size="15" value="<?php echo $coluna['cpf'] ?>" maxlength="14" onkeypress="return valCPF(event,this);return false;" /></td>
      <td align="right">&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="right">*Telefone:</td>
      <td><label for="telefone"></label>
        <input name="telefone" type="text" value="<?php echo $coluna['telefone'] ?>" id="telefone" onkeypress="return valPHONE(event,this); return false;" size="15" maxlength="13" /></td>
      
      <td align="right">&nbsp;</td>
      <td align="left"><label for="dataNascimento"></label></td>
    </tr>
    <tr>
      <td align="right">Celular:</td>
      <td align="left"><label for="celular"></label>
        <input name="celular" type="text" value="<?php echo $coluna['celular'] ?>" id="celular" size="15" maxlength="13" onkeypress="return valPHONE(event,this); return false;"/></td>
      <td align="right">&nbsp;</td>
      <td><label for="cpf"></label></td>
      </tr>
    <tr>
      <td align="right">*Email:</td>
      <td><label for="email"></label>
        <input name="email" type="text" id="email" size="40" value="<?php echo $coluna['email'] ?>" /></td>
      <td align="right">&nbsp;</td>
      <td align="left">&nbsp;</td>
      </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td align="left">&nbsp;</td>
      <td align="right">&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="right">*Login:</td>
      <td><label for="login"></label>
      <input name="login" type="text" id="login" size="25" maxlength="20" value="<?php echo $coluna['login_funcionario'] ?>" /></td>
      <td>&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="right">*Senha:</td>
      <td><label for="senha"></label>
      <input name="senha" type="password" id="senha" size="25" maxlength="20" value=""/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="right">*Confirmar Senha</td>
      <td><label for="confirmaSenha"></label>
        <input name="confirmaSenha" type="password" id="confirmaSenha" size="25" maxlength="20" value=""/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3" align="center"><input type="submit" name="enviar" id="enviar" value="Editar Cadastro" /></td>
    </tr>
  </table>
</form>

</div>
</div>

</body>
</html>
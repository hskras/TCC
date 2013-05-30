
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrar Cliente</title>
<? include "../uteis/validaFormCliente.js"; ?>
<style type="text/css">
#form1 table tr td strong {
	color: #003;
}

</style>

<link href="../default.css" rel="stylesheet" type="text/css" />
<? if (!isset($_SESSION)) session_start(); ?>
<? include "../uteis/conexao.php" ?>
<?php include "../uteis/mascaras.js" ?>
</head>

<body>

<div id="fundocli">

<div class="formulario">

<?php
$usuarioLogado = $_SESSION['UsuarioLogin'];

$sql = mysql_query("SELECT * FROM clientes where login_cliente = '$usuarioLogado'");
$coluna = mysql_fetch_array($sql);

$sql2 = mysql_query("SELECT * FROM usuarios_login where login = '$usuarioLogado'");
$coluna2 = mysql_fetch_array($sql2);
 
?>
	
<form name="frmCadCliente" id="formulariocliente" method="post" action="salvaAlteracoes.php" onsubmit="return validaForm(this,2);">
   <table width="100%" border="0">
    <tr>
      <td width="9%">&nbsp;</td>
      <td colspan="3" align="center"><strong>Editar Cliente</strong></td>
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
      <td></td>
    </tr>
    <tr>
      <td align="right">*Telefone:</td>
      <td><label for="telefone"></label>
        <input name="telefone" type="text" value="<?php echo $coluna['telefone'] ?>" id="telefone" onkeypress="return valPHONE(event,this); return false;" size="15" maxlength="13" /></td>
      
      <td align="right">*Data de Nascimento:</td>
      <td align="left"><label for="dataNascimento"></label>
      <input name="dataNascimento" type="text" value="<?php echo $coluna['dataNascimento'] ?>" id="dataNascimento" onkeypress="return valDATA(event,this); return false;" size="15" maxlength="10"/></td>
    </tr>
    <tr>
      <td align="right">Celular:</td>
      <td align="left"><label for="celular"></label>
        <input name="celular" type="text" value="<?php echo $coluna['celular'] ?>" id="celular" size="15" maxlength="13" onkeypress="return valPHONE(event,this); return false;"/></td>
      <td align="right">*CPF:</td>
      <td><label for="cpf"></label>
        <input name="cpf" type="text" id="cpf" size="15" value="<?php echo $coluna['cpf'] ?>" maxlength="14" onkeypress="return valCPF(event,this);return false;" /></td>
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
      <td align="right">*CEP:</td>
      <td><label for="cep"></label>
      <input name="cep" type="text" id="cep" value="<?php echo $coluna['cep'] ?>" onkeypress="return valCEP(event,this); return false;" size="15" maxlength="9" /></td>
      <td align="right">&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="right">*Endereço:</td>
      <td><label for="endereco"></label>
      <input name="endereco" type="text" id="endereco" size="40" value="<?php echo $coluna['endereco'] ?>"/></td>
      <td align="right">*Número:</td>
      <td align="left"><label for="numero"></label>
      <input name="numero" type="text" id="numero" size="10" maxlength="6" value="<?php echo $coluna['numero'] ?>" /></td>
    </tr>
    <tr>
      <td align="right">Complemento:</td>
      <td><label for="complemento"></label>
      <input name="complemento" type="text" id="complemento" size="30" /></td>
      <td align="right">Bairro:</td>
      <td align="left"><label for="bairro"></label>
      <input name="bairro" type="text" id="bairro" size="30" value="<?php echo $coluna['bairro'] ?>"/></td>
    </tr>
    <tr>
      <td align="right">*Cidade:</td>
      <td><label for="cidade"></label>
      <input name="cidade" type="text" id="cidade" size="30" value="<?php echo $coluna['cidade'] ?>"/></td>
      <td align="right">Estado:</td>
      <td align="left"><label for="estado"></label>
        <select name="estado" id="estado">
        <option><?php echo $coluna['estado'] ?></option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MG</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
        </select></td>
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
      <input name="login" type="text" id="login" size="25" maxlength="20" value="<?php echo $coluna['login_cliente'] ?>" readonly="readonly"/></td>
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
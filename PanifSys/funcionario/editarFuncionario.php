
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
      <td align="right">Sexo:</td>
      <td><label for="sexo"></label>
            <select name="sexo" id="sexo" tabindex="3" value="<?php echo $coluna['sexo'] ?>">
            <option value="">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            </select></td>
    </tr>
    <tr>
      <td align="right">*Telefone:</td>
      <td><label for="telefone"></label>
        <input name="telefone" type="text" value="<?php echo $coluna['telefone'] ?>" id="telefone" onkeypress="return valPHONE(event,this); return false;" size="15" maxlength="13" /></td>
      
      <td align="right">*Data de Nascimento:</td>
      <td align="left"><label for="dataNascimento"></label>
      <input name="dataNascimento" type="text" value="<?php echo $coluna['data_nascimento'] ?>" id="dataNascimento" onkeypress="return valDATA(event,this); return false;" size="15" maxlength="10"/></td>
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
      <td align="right">Email:</td>
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
      <td align="right">Data Admissão:</td>
      <td align="left"><label for="dataAdmissao"></label>
        <input name="dataAdmissao" type="text" id="dataAdmissao" value="<?php echo $coluna['data_admissao'] ?>" size="15" maxlength="10" onkeypress="return valDATA(event,this); return false;" /></td>
      <td align="right">Estado Civil:</td>
      <td align="left"><label for="estadoCivil"></label>
        <select name="estadoCivil" id="estadoCivil" value="<?php echo $coluna['estado_civil'] ?>" tabindex="6">
        <option value="">Selecione</option>
        <option value="solteiro">Solteiro</option>
        <option value="casado">Casado</option>
        <option value="separado">Separado</option>
        <option value="divorciado">Divorciado</option>
        <option value="viuvo">Viuvo</option>
        </select></td>
    </tr>
    <tr>
      <td align="right">Função:</td>
      <td align="left"><label for="cargo"></label>
        <select name="cargo" id="cargo" value="<?php echo $coluna['cargo'] ?>" tabindex="7">
        <option value="">Selecione</option>
        <option value="administrador">Administrador</option>
        <option value="entregador">Entregador</option>
        <option value="padeiro">Padeiro</option>
        <option value="confeiteiro">Confeiteiro</option>
        <option value="ajudante">Ajudante</option>
        <option value="atendente">Atendente</option>        
        </select></td>
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
      <input name="complemento" type="text" id="complemento" size="30" value="<?php echo $coluna['complemento'] ?>" /></td>
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
      <input name="estado" type="text" id="estado" size="10" value="<?php echo $coluna['estado'] ?>"/></td>
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

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" language="javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#cep").blur(function(e){
		if($.trim($("#cep").val()) != ""){
			$.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val(), function(){
				if(resultadoCEP["resultado"]){
					$("#endereco").val(unescape(resultadoCEP["tipo_logradouro"])+": "+unescape(resultadoCEP["logradouro"]));
					$("#bairro").val(unescape(resultadoCEP["bairro"]));
					$("#cidade").val(unescape(resultadoCEP["cidade"]));
					$("#estado").val(unescape(resultadoCEP["uf"]));
				}else{
					alert("Não foi possivel encontrar o endereço");
				}
			});				
		}		
	})
});
</script>

</head>

<body>

<div id="fundocli">

<div class="formulario">

<form name="frmCadCliente" id="formulariocliente" method="post" action="cliente/efetuaCadastro.php" onsubmit="return validaForm(this,1);">
   <table width="100%" border="0">
    <tr>
      <td width="9%">&nbsp;</td>
      <td colspan="3" align="center"><strong>Cadastrar Novo Cliente</strong></td>
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
      <input name="nome" type="text" id="nome" value="" size="50" maxlength="50" /></td>
      <td align="right">&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td align="right">*Telefone:</td>
      <td><label for="telefone"></label>
        <input name="telefone" type="text" value="" id="telefone" onkeypress="return valPHONE(event,this); return false;" size="15" maxlength="13" /></td>
      
      <td align="right">*Data de Nascimento:</td>
      <td align="left"><label for="dataNascimento"></label>
      <input name="dataNascimento" type="text" value="" id="dataNascimento" onkeypress="return valDATA(event,this); return false;" size="15" maxlength="10"/></td>
    </tr>
    <tr>
      <td align="right">Celular:</td>
      <td align="left"><label for="celular"></label>
        <input name="celular" type="text" value="" id="celular" size="15" maxlength="13" onkeypress="return valPHONE(event,this); return false;"/></td>
      <td align="right">*CPF:</td>
      <td><label for="cpf"></label>
        <input name="cpf" type="text" id="cpf" size="15" value="" maxlength="14" onkeypress="return valCPF(event,this);return false;" /></td>
      </tr>
    <tr>
      <td align="right">*Email:</td>
      <td><label for="email"></label>
        <input name="email" type="text" id="email" size="40" value="" /></td>
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
      <input name="cep" type="text" id="cep" value="" onkeypress="return valCEP(event,this); return false;" size="15" maxlength="9" /></td>
      <td align="right">&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="right">*Endereço:</td>
      <td><label for="endereco"></label>
      <input name="endereco" type="text" id="endereco" size="40" value=""/></td>
      <td align="right">*Número:</td>
      <td align="left"><label for="numero"></label>
      <input name="numero" type="text" id="numero" size="10" maxlength="6" value="" /></td>
    </tr>
    <tr>
      <td align="right">Complemento:</td>
      <td><label for="complemento"></label>
      <input name="complemento" type="text" id="complemento" size="30" /></td>
      <td align="right">*Bairro:</td>
      <td align="left"><label for="bairro"></label>
      <input name="bairro" type="text" id="bairro" size="30" value=""/></td>
    </tr>
    <tr>
      <td align="right">*Cidade:</td>
      <td><label for="cidade"></label>
      <input name="cidade" type="text" id="cidade" size="30" value=""/></td>
      <td align="right">*Estado:</td>
      <td align="left"><label for="estado"></label>
        <select name="estado" id="estado">
        <option>Selecione</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espirito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraiba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantis</option>
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
      <input name="login" type="text" id="login" size="25" maxlength="20" value="" /></td>
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
      <td colspan="3" align="center"><input type="submit" name="enviar" id="enviar" value="Efetivar Cadastramento" /></td>
    </tr>
  </table>
</form>

</div>
</div>

</body>
</html>
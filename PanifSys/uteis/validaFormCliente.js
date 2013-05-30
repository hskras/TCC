<script type="text/javascript">

function verificaCPF(campo) {
      cpf = campo.replace(/\./g, '').replace(/\-/g, '');
      erro = new String;
      var nonNumbers = /\D/;
      if (cpf == "00000000000" || cpf == "11111111111" 
           || cpf == "22222222222" || cpf == "33333333333" 
           || cpf == "44444444444" || cpf == "55555555555" 
           || cpf == "66666666666" || cpf == "77777777777" 
           || cpf == "88888888888" || cpf == "99999999999"){
              return false;
     }
     var a = [];
     var b = new Number;
     var c = 11;
     for (i=0; i<11; i++){
             a[i] = cpf.charAt(i);
             if (i < 9) b += (a[i] * --c);
     }
     if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
     b = 0;
     c = 11;
     for (y=0; y<10; y++) b += (a[y] * c--); 
     if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
     if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10])){
             return false;
     }
     
}
 
function validaForm(frm,acao) {
// O paramêtro frm desta função significa: this.form, pois a chamada da função - validaForm(this), foi setada na tag form.

// Vamos verificar se o campo nome foi preenchido e se ele contém no mínio três caracteres.
if(frm.nome.value == "" || frm.nome.value == null || frm.nome.value.length < 3) {
	// Exibiremos um alerta, caso o campo esteja vazio.
	alert("Preencha seu nome!");
	// Vamos setar um focus no campo.
	frm.nome.focus();
	// Bloqueando o envio do form.
	return false;
}

if(frm.telefone.value == "" || frm.telefone.value == null || frm.telefone.value.length < 13) {
	// Exibiremos um alerta, caso o campo esteja vazio.
	alert("Preencha o telefone corretamente!");
	// Vamos setar um focus no campo.
	frm.telefone.focus();
	// Bloqueando o envio do form.
	return false;
}
if(frm.dataNascimento.value == "" || frm.dataNascimento.value == null || frm.dataNascimento.value.length < 10) {
	// Exibiremos um alerta, caso o campo esteja vazio.
	alert("Preencha a data de Nascimento corretamente!");
	// Vamos setar um focus no campo.
	frm.dataNascimento.focus();
	// Bloqueando o envio do form.
	return false;
}

var filtro_email = /^.+@.+\..{2,3}$/
if (!filtro_email.test(frm.email.value) || frm.email.value=="") {
	alert("Preencha o email corretamente.");
	frm.email.focus();
	return false;
}

if(frm.cpf.value == "" || frm.cpf.value == null || frm.cpf.value.length < 14) {
	// Exibiremos um alerta, caso o campo esteja vazio.
	alert("Preencha o CPF corretamente!");
	// Vamos setar um focus no campo.
	frm.cpf.focus();
	// Bloqueando o envio do form.
	return false;
}
if(verificaCPF(frm.cpf.value) == false)
{
	alert("CPF Inválido!");
	// Vamos setar um focus no campo.
	frm.cpf.focus();
	// Bloqueando o envio do form.
	return false;
	
}

if(frm.cep.value == "" || frm.cep.value == null || frm.cep.value.length < 9) {
	// Exibiremos um alerta, caso o campo esteja vazio.
	alert("Preencha o CEP corretamente!");
	// Vamos setar um focus no campo.
	frm.cep.focus();
	// Bloqueando o envio do form.
	return false;
}

if(frm.endereco.value == "" || frm.endereco.value == null) {
	// Exibiremos um alerta, caso o campo esteja vazio.
	alert("Preencha o Endereço corretamente!");
	// Vamos setar um focus no campo.
	frm.endereco.focus();
	// Bloqueando o envio do form.
	return false;
}
if(frm.numero.value == "" || frm.numero.value == null) {
	// Exibiremos um alerta, caso o campo esteja vazio.
	alert("Preencha o número do endereço corretamente!");
	// Vamos setar um focus no campo.
	frm.numero.focus();
	// Bloqueando o envio do form.
	return false;
}
if(frm.cidade.value == "" || frm.cidade.value == null) {
	// Exibiremos um alerta, caso o campo esteja vazio.
	alert("Preencha a Cidade corretamente!");
	// Vamos setar um focus no campo.
	frm.cidade.focus();
	// Bloqueando o envio do form.
	return false;
}
if(frm.bairro.value == "" || frm.bairro.value == null) {
	// Exibiremos um alerta, caso o campo esteja vazio.
	alert("Preencha o bairro corretamente!");
	// Vamos setar um focus no campo.
	frm.bairro.focus();
	// Bloqueando o envio do form.
	return false;
}
if(frm.estado.value == "" || frm.estado.value == null) {
	// Exibiremos um alerta, caso o campo esteja vazio.
	alert("Preencha o estado corretamente!");
	// Vamos setar um focus no campo.
	frm.estado.focus();
	// Bloqueando o envio do form.
	return false;
}

if(frm.login.value == "" || frm.login.value == null) {
	// Exibiremos um alerta, caso o campo esteja vazio.
	alert("Preencha o Login!");
	// Vamos setar um focus no campo.
	frm.login.focus();
	// Bloqueando o envio do form.
	return false;
}
if(acao == 1){
	if(frm.senha.value == "" || frm.senha.value == null) {
		// Exibiremos um alerta, caso o campo esteja vazio.
		alert("Preencha a Senha!");
		// Vamos setar um focus no campo.
		frm.senha.focus();
		// Bloqueando o envio do form.
		return false;
	}
	if(frm.confirmaSenha.value == "" || frm.confirmaSenha.value == null) {
		// Exibiremos um alerta, caso o campo esteja vazio.
		alert("Confirme a Senha!");
		// Vamos setar um focus no campo.
		frm.confirmaSenha.focus();
		// Bloqueando o envio do form.
		return false;
	}
	if(frm.confirmaSenha.value != frm.senha.value) {
		// Exibiremos um alerta, caso o campo esteja vazio.
		alert("As senhas inseridas não são iguais!");
		// Vamos setar um focus no campo.
		frm.confirmaSenha.focus();
		// Bloqueando o envio do form.
		return false;
	}
}
// Como tudo está correto, vamos permitir o envio do formulário.

if(acao == 1) alert('Cadastramento realizado com sucesso. Você será redirecionado a página inicial, efetue seu login para acessar o sistema.');
else if(acao == 2) alert('Aterações realizadas com sucesso. Você será redirecionado a página inicial do cliente!');
return true;
}

</script>
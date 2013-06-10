<script type="text/javascript">
 
function validaFormFunc(frm,acao) {
// passa o formulario e a ação. Ação representa inclusão ou alteração.

		// verifica se o campo nome foi preenchido e se ele contém no mínimo três caracteres.
		if(frm.nome.value == "" || frm.nome.value == null || frm.nome.value.length < 3) {
			alert("Preencha o nome!");
			frm.nome.focus(); //coloca foco no campo			
			return false; //não deixa enviar o form
		}
		
		if(frm.telefone.value == "" || frm.telefone.value == null || frm.telefone.value.length < 13) {
			alert("Preencha o telefone corretamente!");
			frm.telefone.focus();
			return false;
		}
		
		var filtro_email = /^.+@.+\..{2,3}$/
		if (!filtro_email.test(frm.email.value) || frm.email.value=="") {
			alert("Preencha o email corretamente.");
			frm.email.focus();
			return false;
		}
		
		if(frm.login.value == "" || frm.login.value == null) {
				alert("Preencha o Login!");
				frm.login.focus();
				return false;
		}
		
		if(acao == 1){ //novo cadastro
			if(frm.senha.value == "" || frm.senha.value == null) {
				alert("Preencha a Senha!");
				frm.senha.focus();
				return false;
			}
			if(frm.confirmaSenha.value == "" || frm.confirmaSenha.value == null) {
				alert("Confirme a Senha!");
				frm.confirmaSenha.focus();
				return false;
			}
			if(frm.confirmaSenha.value != frm.senha.value) {
				alert("As senhas inseridas não são iguais!");
				frm.confirmaSenha.focus();
				return false;
			}
			
		} //fim acao = 1
		
		// Caso tudo esteja correto		
		if(acao == 1) alert('Cadastramento realizado com sucesso.');
		else if(acao == 2) alert('Alterações realizadas com sucesso.');
		return true;
}

</script>
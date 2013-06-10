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
// passa o formulario e a ação. Ação representa inclusão ou alteração.
		
		var url = 'uteis/captcheck.php?code=';
        var captchaOK = 2;  // 2 - não checado ainda, 1 - certo, 0 - errado
        
        function getHTTPObject()
        {
        try {
        req = new XMLHttpRequest();
          } catch (err1)
          {
          try {
          req = new ActiveXObject("Msxml12.XMLHTTP");
          } catch (err2)
          {
          try {
            req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (err3)
            {
			req = false;
					}
				  }
			}
				return req;
			}
        
        var http = getHTTPObject(); // Cria o objeto HTTP        
        
        function handleHttpResponse() {
        if (http.readyState == 4) {
            captchaOK = http.responseText;
            if(captchaOK != 1) {
              alert('Captcha Incorreto!');
              frm.secure.value='';
              frm.secure.focus();
              return false;
              }
			  if(acao == 1) alert('Cadastramento realizado com sucesso. Você será redirecionado a página inicial, efetue seu login para acessar o sistema.');
			  //alert('Captcha ok');
              frm.submit();
           }
        }
		
		function checkcode(thecode) {
			http.open("GET", url + escape(thecode), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
        }

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
		
		if(frm.cpf.value == "" || frm.cpf.value == null || frm.cpf.value.length < 14) {
			alert("Preencha o CPF corretamente!");
			frm.cpf.focus();
			return false;
		}
		
		if(verificaCPF(frm.cpf.value) == false)
		{
			alert("CPF Inválido!");
			frm.cpf.focus();
			return false;			
		}
		
		if(frm.cep.value == "" || frm.cep.value == null || frm.cep.value.length < 9) {
			alert("Preencha o CEP corretamente!");
			frm.cep.focus();
			return false;
		}
		
		if(frm.endereco.value == "" || frm.endereco.value == null) {
			alert("Preencha o Endereço corretamente!");
			frm.endereco.focus();
			return false;
		}
		
		if(frm.numero.value == "" || frm.numero.value == null) {
			alert("Preencha o Número corretamente!");
			frm.numero.focus();
			return false;
		}
		
		if(frm.cidade.value == "" || frm.cidade.value == null) {
			alert("Preencha a Cidade corretamente!");
			frm.cidade.focus();
			return false;
		}
		
		if(frm.bairro.value == "" || frm.bairro.value == null) {
			alert("Preencha o Bairro corretamente!");
			frm.bairro.focus();
			return false;
		}
		
		if(frm.estado.value == "" || frm.estado.value == null) {
			alert("Preencha o estado corretamente!");
			frm.estado.focus();
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
			if(frm.secure.value == "")
			{
				alert("Entre com o captcha!");
				frm.secure.focus();
				return false;		
			}
			else {
				checkcode(frm.secure.value);
          		return false;
			}
		} //fim acao = 1
		
		// Caso tudo esteja correto		
		if(acao == 2) alert('Alterações realizadas com sucesso. Você será redirecionado a página inicial do cliente!');
		else if(acao == 3) alert('Cadastramento realizado com sucesso.');
		else if(acao == 4) alert('Alterações realizadas com sucesso.');
		return true;
}

</script>
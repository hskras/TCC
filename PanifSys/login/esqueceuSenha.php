<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Esqueceu senha</title>
<link href="default.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">

function validaEmail(frm) {
		var filtro_email = /^.+@.+\..{2,3}$/
		if (!filtro_email.test(frm.email_esq.value) || frm.email_esq.value=="") {
			alert("Preencha o email corretamente.");
			frm.email_esq.focus();
			return false;
		}
}
</script>
</head>

<body>

<h1 class="title">Esqueci Minha Senha</h1>
<p>&nbsp;</p>
			<div class="entry">
				<form name="form1" method="post" action="login/enviaSenha.php" onsubmit="return validaEmail(this);">
                  <table width="100%" border="0">
                    <tr>
                      <td align="left">Entre com seu e-mail no campo abaixo.</td>
                    </tr>
                    <tr>
                      <td align="left"><label for="email_esq"></label>
                      <input name="email_esq" type="text" id="email_esq" size="60" maxlength="60"></td>
                    </tr>
                    <tr>
                      <td align="left"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
                    </tr>
                  </table>
                </form>
			</div>
</body>
</html>

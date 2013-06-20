<script type="text/javascript">

function validaFormProd(frm,acao) {

	if(frm.produto.value == "" || frm.produto.value == null || frm.produto.value.length < 3) {
		alert("Preencha o nome do produto!");
		frm.produto.focus(); //coloca foco no campo			
		return false; //não deixa enviar o form
	}
	if(frm.preco.value == "" || frm.preco.value == null) {
		alert("Preencha o preço do produto!");
		frm.preco.focus(); //coloca foco no campo			
		return false; //não deixa enviar o form
	}
	else if(frm.preco.value <= 0) {
		alert("O preço não pode ser menor ou igual a 0!");
		frm.preco.focus(); //coloca foco no campo			
		return false; //não deixa enviar o form
	}

	if(acao == 1) alert('Produto incluido com sucesso.');
	else if(acao == 2) alert('Produto alterado com sucesso.');
	return true;
}

</script>
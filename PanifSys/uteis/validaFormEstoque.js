<script type="text/javascript">

function validaFormEstoque(frm,acao) {

	if(frm.insumo.value == "" || frm.insumo.value == null || frm.insumo.value.length < 3 || frm.insumo.value == "Selecione" ) {
		alert("Escolha o insumo para adicionar no estoque!");
		frm.insumo.focus(); //coloca foco no campo			
		return false; //não deixa enviar o form
	}
	if(frm.quantidade.value == "" || frm.quantidade.value == null) {
		alert("Preencha a quantidade atual no estoque!");
		frm.quantidade.focus(); //coloca foco no campo			
		return false; //não deixa enviar o form
	}
	else if(frm.quantidade.value < 0){
		alert("Quantidade não pode ser menor do que 0!");
		frm.quantidade.focus(); //coloca foco no campo			
		return false; //não deixa enviar o form
	}
	if(frm.quantidade_minima.value == "" || frm.quantidade_minima.value == null) {
		alert("Preencha a quantidade minima do estoque!");
		frm.quantidade_minima.focus(); //coloca foco no campo			
		return false; //não deixa enviar o form
	}
	else if(frm.quantidade_minima.value < 0){
		alert("Quantidade mínima não pode ser menor do que 0!");
		frm.quantidade_minima.focus(); //coloca foco no campo			
		return false; //não deixa enviar o form
	}
	if(frm.unidade.value == "" || frm.unidade.value == null || frm.unidade.value == "Selecione") {
		alert("Preencha a unidade de medida dos insumos no estoque!");
		frm.unidade.focus(); //coloca foco no campo			
		return false; //não deixa enviar o form
	}

	if(acao == 1) alert('Insumo incluido no estoque com sucesso.');
	else if(acao == 2) alert('Insumo alterado no estoque com sucesso.');
	return true;
}

</script>
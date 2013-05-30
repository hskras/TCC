<script type="text/javascript">
try{
xmlhttp = new XMLHttpRequest();
}
catch(ee){
try{
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
}
catch(e){
try{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
catch(E){
xmlhttp = false;
}
}
}
div_base = "";
valor = 0;
function abre(arquivo,metodo,div){
div_base = div;
valor++;
xmlhttp.open(metodo,arquivo+"?valor="+valor);
xmlhttp.onreadystatechange=conteudo
xmlhttp.send(null)
}
function conteudo() {
nova_div = div_base;
document.getElementById(nova_div).innerHTML="<div style='top:50%;left:50%;position:absolute;'>carregando...</div>"
if (xmlhttp.readyState==4){
document.getElementById(nova_div).innerHTML=xmlhttp.responseText
}
}
</script>

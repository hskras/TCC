<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>.: PanifSys :.</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<?php include "uteis/validaFormCliente.js" ?>
<?php include "uteis/mascaras.js" ?>
<?php include "uteis/conexao.php" ?>

</head>
<body>

<!-- start header -->
<div id="header">
	<div id="logo">
	  <h1>PanifSys</h1>
		
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="index.php"> Página Inicial </a></li>
			<li><a href="#">Produtos</a></li>
			<li><a href="#">Contato </a></li>
		</ul>
	</div>
</div>
<!-- end header -->

<div id="wrapper">
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
        
        
			<?php 
			if(isset($_GET['cadastrar'])) {
				@include ('cliente/cadastrarCliente.php'); 
			 }
			 else if(isset($_GET['inicio'])) {
				@include ('inicio.php'); 
			 }
			 else @include ('inicio.php');					
			?>
            
			<div class="meta">
				
			</div>
		</div>
		<div class="post">
			
			<div class="entry">
				
			</div>
			<div class="meta">
				
			</div>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
    <div id ="login">
		<?php @include ('login/login.php'); ?>
        </div>
        
        <div id = "cadastro">
        <table width="100%" border="0">
        		<tr>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td><a href="index.php?cadastrar=true">Novo Cadastramento</a></td>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
		      </table>
        </div>
	</div>
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	<p id="legal"> PanifSys (2013) </p>
</div>
<!-- end footer -->
</body>
</html>

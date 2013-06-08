<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>.: PanifSys :.</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" />

<?php 

include "../uteis/validaFormCliente.js";
include "../uteis/mascaras.js";
include "../uteis/conexao.php";

if (!isset($_SESSION)) session_start(); 

$nivel_necessario = 1;

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioNome']) OR ($_SESSION['UsuarioNivel'] != $nivel_necessario)) {
	// Destrói a sessão por segurança
	session_destroy();
	// Redireciona o visitante de volta pro login
	header("Location: ../index.php"); exit;
}

?>


</head>
<body>
<!-- start header -->
<div id="header">
	<div id="logo">
	  <h1>PanifSys</h1>
		
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="layoutAdministrador.php?inicio=true"> Página Inicial </a></li>
			<li><a href="#"> Produtos </a></li>
			<li><a href="#"> Contato </a></li>
	  </ul>
		<p>&nbsp;</p>
		<div id="statusLogado">
		<ul>
           <li><table>
           <tr>
           <td>Você está logado como: <?php echo $_SESSION['UsuarioNome']; ?></td>
           <td> <a href="../login/logout.php">Deslogar</a></td>
           </tr>
           </table>
           </li>
          
		</ul>
        </div>
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
			 error_reporting(E_ALL ^ E_NOTICE);
		
			 if(isset($_GET['inicio'])) {
				@include ('inicioAdministrador.php'); 
			 }
			 else if(isset($_GET['listarClientes'])) { 
				@include('../cliente/listarClientes.php'); 
			 } 
			 else if(isset($_GET['listarFuncionarios'])) { 
				@include('../funcionario/listarFuncionarios.php'); 
			 } 
			 else if(isset($_GET['cadastrarCliente'])){
				@include('../cliente/cadastrarCliente.php');
			 }
			 else if(isset($_GET['cadastrarFuncionario'])){
				@include('../funcionario/cadastrarFuncionario.php');
			 }
			 else if(isset($_GET['editarCliente'])){
				 $clienteAltera = $_GET['editarCliente'];
				@include ('../cliente/editarCliente.php');
			 }
			 else if(isset($_GET['editarFuncionario'])){
				 $funcionarioAltera = $_GET['editarFuncionario'];
				@include ('../funcionario/editarFuncionario.php');
			 }
			 else if(isset($_GET['excluirCliente'])){
				 
				 //ações excluir - estou excluindo no próprio listar, não passa por aqui
			 }
			 else if(isset($_GET['excluirFuncionario'])){
				 
				 //ações excluir - estou excluindo no próprio listar, não passa por aqui
			 }
			 	 
			 else @include ('inicioAdministrador.php'); 
			 
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
		<ul>	
			<li>
				<h2><strong>Menu</strong></h2>
				<ul>
					<li><a href="../administrador/layoutAdministrador.php?listarClientes=true">Cadastrar Clientes</a></li>
					<li><a href="../administrador/layoutAdministrador.php?listarFuncionarios=true">Cadastrar Funcionários</a></li>
					<li><a href="#">Cadastrar Produtos</a></li>
					<li><a href="#">Controlar Estoque</a></li>
					<li><a href="#">Cadastrar Pedidos</a></li>										
				</ul>
			</li>
			<li> 
				<!-- Aqui iria um segundo menu de opções -->
			</li> 
		</ul>
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

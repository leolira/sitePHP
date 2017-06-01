<?php
include "objetos/config.inc.php";

session_start();
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
	//Destrói
	session_destroy();

	//Limpa
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	
	//Redireciona para a página de autenticação
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/ss.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/c.css">
</head>
<body>

<div class="container-fluid" style="background: #F1F1F1;margin: 15px;border: 1px solid black">
	<div class="row content">
		<div class="col-sm-8">    
			<ul class="nav navbar-nav">
				<li class="active" style="color: #0034A1;padding: 15px;margin-right: 200px;" ><img src="Admin.png" height="60" width="60" ><h4>Bem vindo ao Painel Admin <?=$_SESSION['login']?></h4></li>
				<li style="background-color: black;" ><h3 style="color: white;padding: 10px">Painel de Controle Admin</h3></li>
			</ul>
		</div>
		<div class="col-sm-4">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="?pg=sair"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="container-fluid" style="background: white;">    
	<div class="row content">
		<div class="col-sm-2 text-center" style="background: white;">
			<ul style="border: 1px solid black;">
				<li><a class="active" href="index.php">Painel Admin</a></li>
				<li><a href="?pg=listaopcao">Lista Conteudo</a></li>
				<li><a href="?pg=inserirIlustracao">Inserir Ilustração</a></li>
				<li><a href="?pg=inserirblog">inserir Blog</a></li>
				<li><a href="?pg=sair">SAIR</a></li>
			</ul>
		</div>
		<div class="col-sm-8" style="background: #F1F1F1;border: 1px solid black;"> 
	
		<?php
		
			if(empty($_SERVER["QUERY_STRING"])){
				$var ="conteudo.php";
				include_once($var);
			}else{
				$pg= $_GET['pg'];
				include_once("$pg.php");
				
			}	
			
		?>
		</div>
	</div>
</div>
<div class="col-sm-2"></div>
<div class="col-sm-8">
	<footer class="container-fluid text-center" style="background: black;">
		<p style="color: white;font-size: 20px;">Controle</p>
	</footer>
</div>

</body>
</html>

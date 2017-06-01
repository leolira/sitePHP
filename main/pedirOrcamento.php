<?php


include "objetos/orcamento.php";

	$obj = new Orcamento();
	
	$obj -> __set("nome",$_POST['nome']);
	$obj -> __set("email",$_POST['email']);
	$obj -> __set("telefone",$_POST['telefone']);
	$obj -> __set("atributosOrcamento",$_POST['tipoImagem']);
	$obj -> __set("documento",$_POST['quantidade']);

	$retorno = $obj -> pedirOrcamento($obj);
	
	
	if($retorno!=null){
		
		echo "<script>
    alert('enviado com sucesso!!')</script>";
		/*echo "<div style='width:200px;
	height:100px;
	background:#f00;
	position:absolute;
	z-index:100;
	top:30%;
	left:50%;'> <h1> olá mundo</h1><div>";*/
	}else{
		echo "<script>
    alert('Erro ao enviar')</script>";
	}
	
	
	
	

?>
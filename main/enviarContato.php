<?php


include "objetos/contato.php";

try{
	$obj = new Contato();

	$obj -> __set("nome",$_POST['nome']);
	$obj -> __set("email",$_POST['email']);
	$obj -> __set("telefone",$_POST['telefone']);
	$obj -> __set("mensagem",$_POST['mensagem']);

	$obj -> escreverContato($obj);
	
	echo "<script>
    alert('Envidado Com sucesso')</script>";
	
	
} catch (Exception $e) {
	
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}

?>
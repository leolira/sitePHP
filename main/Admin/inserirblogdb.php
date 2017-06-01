<?php


include "objetos/blog.php";
try{
	$obj = new Blog();

	$obj -> __set("titulo",$_POST['titulo']);
	$obj -> __set("conteudo",$_POST['conteudo']);
	$obj -> __set("assinatura",$_POST['assinatura']);
	$obj -> __set("data",$_POST['data']);

	$todos = $obj -> adicionarPostagem($obj);
	echo "Adicioinado com Sucesso!!!!";
} catch (Exception $e) {
	
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}

?>
<?php

include "objetos/Blog.php";

$obj = new Blog();



$obj -> __set("id",$_POST['id']);
$obj -> __set("titulo",$_POST['titulo']);
$obj -> __set("conteudo",$_POST['conteudo']);
$obj -> __set("assinatura",$_POST['assinatura']);
$obj -> __set("data",$_POST['data']);



$todos = $obj -> atualizarPostagem($obj);

if($todos!=null){
	echo "Atualizado";
}else{
	echo "Erro no banco";
}


?>
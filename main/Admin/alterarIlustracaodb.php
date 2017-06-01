<?php

include "objetos/ilustracao.php";

$obj = new Ilustracao();



$obj -> __set("id",$_POST['id']);
$obj -> __set("descricao",$_POST['descricao']);
$obj -> __set("tipoIlustracao",$_POST['tipoIlustracao']);


$todos = $obj -> atualizarIlustracao($obj);

echo "Atualizado";
?>
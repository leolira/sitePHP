<?php

include "objetos/ilustracao.php";

$obj = new Ilustracao();

$obj -> __set("descricao",$_POST['descricao']);
$obj -> __set("tipoIlustracao",$_POST['tipoIlustracao']);


$todos = $obj -> adicionarIlustracao($obj);

echo "Adicioinado com Sucesso!!!!";
?>
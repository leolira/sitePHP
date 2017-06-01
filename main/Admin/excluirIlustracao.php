<?php

include "objetos/ilustracao.php";

$obj = new Ilustracao();

$id = $_REQUEST['id'];

$todos = $obj -> removerIlustracao($id);

echo "Apagado";



?>

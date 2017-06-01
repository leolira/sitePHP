<?php

include "objetos/blog.php";

$obj = new Blog ();

$id = $_REQUEST['id'];

$todos = $obj -> apagarPostagem($id);

echo "Apagado";



?>

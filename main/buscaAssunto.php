<?php


include "objetos/blog.php";


	$obj = new Blog();
	
	$busca = $obj -> buscarAssunto($_REQUEST['buscar']);
	
	if($busca!=null){
		
		if($busca->rowCount()>0){
			include "listabusca.php";
		}else{
			$nome = $_REQUEST['buscar'];
			echo "<div class='col-sm-9'><h4><small>Não postagem para $nome</small></h4></div>";
		}
		
	}else{
		echo "Erro no banco";
	}
	
	


?>
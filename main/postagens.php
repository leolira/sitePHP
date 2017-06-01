<?php
	include_once("main/objetos/blog.php");
	
	$dao = new Blog();
	
	$todos = $dao -> listarBlog();

	if($todos->rowCount()==0){
		echo "<h1>Lista Esta Vazia</h1>";
			
	}else{
	
		if(empty($_REQUEST['id'])){
			$id = 0;
		}else{
			$id = $_REQUEST['id'];
		}
			
		$todo = $dao -> buscarPostagem($id);

		include "listaPostagem.php";
		
	}
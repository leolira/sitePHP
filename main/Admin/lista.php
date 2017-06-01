<?php
	include "objetos/Ilustracao.php";
	include "objetos/Galeria.php";
	include "objetos/Blog.php";
	
	$opcao = $_POST['opcao'];
	$cont = 0;
	
	switch ($opcao) {
		
    case  1:
        $dao = new Ilustracao();
		$todos = $dao -> listarIlustracao();

		
		if($todos->rowCount()>0){
			include "listaIlustracao.php";
		}else{
			echo "<h1>Lista Esta Vazia</h1>";
		}
		
        break;
		
    case 2:
        $dao = new Galeria();
		$todos = $dao -> listarImagem();
		
		if($todos->rowCount()>0){
			include "galerialistaImagem.php";
		}else{
			echo "<h1>Lista Esta Vazia</h1>";
		}
		
		
        break;
    case 3:
        $dao = new Galeria();
		$todos = $dao -> listarVideo();

		if($todos->rowCount()>0){
			include "galerialistaVideo.php";
		}else{
			echo "<h1>Lista Esta Vazia</h1>";
		}
		
        break;
	case 4:
	
        $dao = new Blog();
		
		$todos = $dao -> listarBlog();

		if($todos!=null){
			include "listarBlog.php";
		}else{
			echo "<h1>Lista Esta Vazia</h1>";
		}
		
        break;
	}
	
	
	
	

?>	
	
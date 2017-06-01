<?php 
	
	class DaoGaleria{
		
		
		function listarImagem(){
			
			$sql = "Select * from galeria where tipo = 'i' order by id";
			
			$todos = $this -> banco($sql,"query");
			
			return $todos;
		}
		
		function listarVideo(){
			
			$sql = "Select * from galeria where tipo = 'v' order by id";
			
			$todos = $this -> banco($sql,"query");
			
			return $todos;
		}
		
		function banco($sql,$tipo){
			
			include'objetos/config.inc.php';
			$res = null;
			
			if($tipo=="query"){
				$res = $conn -> query($sql) ;
			}else{
				$res = $conn -> exec($sql) ;
			}
		
			return $res;
		}
	}
?>
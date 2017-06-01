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
			try {
			if($tipo=="query"){
				return $res = $conn -> query($sql) ;
			}else{
				return $res = $conn -> exec($sql) ;
			}
			}
			catch(PDOException $e)
			{
				return $res;
				echo "Conexão com banco falho: " . $e->getMessage();
			}
		}
	}
?>
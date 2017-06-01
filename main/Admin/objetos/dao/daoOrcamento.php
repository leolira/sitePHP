
<?php 
	
	class DaoOrcamento{
		
		
		function pedirOrcamento($obj){
			
			$nome = $obj -> nome;
			$email = $obj -> email;
			$telefone = $obj -> telefone;
			$atributoOrcamento = $obj -> atributosOrcamento;
			$documento = $obj -> documento;
			
			$sql = "INSERT INTO orcamento (nome,email,telefone,atributoOrcamento,documento) VALUES ('$nome','$email','$telefone','$atributoOrcamento','$documento')";
		
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
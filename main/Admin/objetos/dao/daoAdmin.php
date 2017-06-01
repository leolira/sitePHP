<?php 
	
	class DaoAdmin{
		
		
		function adicionarAdmin($obj){
			$nome = $obj -> nome;
			$email = $obj -> email;
			$senha =$obj -> senha;
			$telefone = $obj -> telefone;
			
			$sql = "INSERT INTO admin (nome,email,senha,telefone) VALUES ('$nome','$email','$senha','$telefone')";
		
			$todos = $this -> banco($sql,"query");
			
			return $todos;
		}
		
		function removerAdmin($id){
			
			$sql = "DELETE FROM admin WHERE id = $id";
			$todos = $this -> banco($sql,"exec");
			
			return $todos;
		}
		
		function atualizarAdmin($obj){
			
			$id = $obj -> id;
			$nome = $obj -> nome;
			$email = $obj -> email;
			$senha =$obj -> senha;
			$telefone = $obj -> telefone;
			
			$telefone = $obj -> telefone;
			$sql = "UPDATE admin SET nome='$nome',email='$email',senha='$senha',telefone='$telefone' WHERE id = '$id'";
			
			$todos = $this -> banco($sql,"exec");
			
			return $todos;
		}
		
		function listaAdmin(){
			
			$sql = "Select * from admin order by id";
			
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
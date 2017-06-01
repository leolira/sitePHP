
<?php 
	
	class DaoIlustracao{
		
		
		function adicionarIlustracao($obj){
			
			$descricao = $obj -> descricao;
			$tipoIlustracao = $obj -> tipoIlustracao;
			
			$sql = "INSERT INTO ilustracao (descricao,tipoIlustracao) VALUES ('$descricao','$tipoIlustracao')";
		
			$todos =$this -> banco($sql,"query");
			
			return $todos;
		}
		
		function removerIlustracao($id){
			
			$sql = "DELETE FROM ilustracao WHERE id = $id";
			$todos = $this -> banco($sql,"exec");
			
			return $todos;
		}
		
		function atualizarIlustracao($obj){
			
			$id = $obj -> id;
			$descricao = $obj -> descricao;
			$tipoIlustracao = $obj -> tipoIlustracao;
			
			$sql = "UPDATE ilustracao SET descricao='$descricao',tipoIlustracao='$tipoIlustracao' WHERE id = '$id'";
			
			$todos = $this -> banco($sql,"exec");
			
			return $todos;
		}
		
		function listarIlustracao(){
			
			$sql = "Select * from ilustracao order by id";
			
			$todos = $this -> banco($sql,"query");
			
			
			return $todos;
	

		}
		
		function buscarIlustracao($id){
			
			$sql = "Select * from ilustracao where id='$id'";
			
			$todos = $this -> banco($sql,"query");
			
			return $todos;
		}
		
		function adicionarDescricao($id,$descricao){
			
			$sql = "UPDATE ilustracao SET descricao='$descricao' WHERE id = '$id'";
			
			$todos = $this -> banco($sql,"exec");
			
			return $todos;
		}
		
		function atualizarDescricao($id,$descricao){
			
			$sql = "UPDATE ilustracao SET descricao='$descricao' WHERE id = '$id'";
			
			$todos = $this -> banco($sql,"exec");
			
			return $todos;
		}
		
		function removerDescricao($id){
			
			$sql = "UPDATE ilustracao SET descricao='' WHERE id = '$id'";
			
			$todos = $this -> banco($sql,"exec");
			
			return $todos;
		}
		
		
		
		function banco($sql,$tipo){
			
			include'main/objetos/config.inc.php';
			
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
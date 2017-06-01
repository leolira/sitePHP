<?php 
	
	class DaoBlog{
		
		
		function adicionarPostagem($obj){
			
			$titulo = $obj -> titulo;
			$conteudo = $obj -> conteudo;
			$assinatura =$obj -> assinatura;
			$data = $obj -> data;
			
			$sql = "INSERT INTO blog (titulo,conteudo,assinatura,data) VALUES ('$titulo','$conteudo','$assinatura','$data')";
		
			$todos = $this -> banco($sql,"query");
			
			return $todos;
		}
		
		function apagarPostagem($id){
			
			$sql = "DELETE FROM blog WHERE id = $id";
			$todos = $this -> banco($sql,"exec");
			
			return $todos;
		}
		
		function atualizarPostagem($obj){
			
			$id = $obj -> id;
			$titulo = $obj -> titulo;
			$conteudo = $obj -> conteudo;
			$assinatura =$obj -> assinatura;
			$data = $obj -> data;
			
			$sql = "UPDATE blog SET titulo='$titulo',conteudo='$conteudo',assinatura='$assinatura',data='$data' WHERE id = '$id'";
			
			$todos = $this -> banco($sql,"exec");
			
			return $todos;
		}
		
		public function buscarBlog($id){
			$sql = "Select * from blog where id = '$id'";
			
			$todos = $this -> banco($sql,"query");
			
			
			return $todos;
			
		}
		
		function listarBlog(){
			
			$sql = "Select * from blog order by id";
			
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
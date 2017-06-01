<?php 
	
	class DaoContato{
		
		
		function escreverContato($obj){
			
			$nome = $obj -> nome;
			$email = $obj -> email;
			$telefone =$obj -> telefone;
			$titulo = $obj -> titulo;
			$mensagem = $obj -> mensagem;
			
			$sql = "INSERT INTO contato (nome,email,telefone,titulo,mensagem) VALUES ('$nome','$email','$telefone','$titulo','$mensagem')";
		
			$todos = $this -> banco($sql,"query");
			
			return $todos;
		}
		
		function apagarContato($id){
			
			$sql = "DELETE FROM contato WHERE id = $id";
			$todos = $this -> banco($sql,"exec");
			
			return $todos;
		}
		
		function modificarContato($obj){
			
			$id = $obj -> id;
			$nome = $obj -> nome;
			$email = $obj -> email;
			$telefone =$obj -> telefone;
			$titulo = $obj -> titulo;
			$mensagem = $obj -> mensagem;
			
			$sql = "UPDATE contato SET nome='$nome',email='$email',telefone='$telefone',titulo='$titulo',mensagem='$mensagem' WHERE id = '$id'";
			
			$todos = $this -> banco($sql,"exec");
			
			return $todos;
		}
		
		function gerenciarContato($obj){
			
			$id = $obj -> id;
			$nome = $obj -> nome;
			$email = $obj -> email;
			$telefone =$obj -> telefone;
			$titulo = $obj -> titulo;
			$mensagem = $obj -> mensagem;
			
			$sql = "UPDATE contato SET nome='$nome',email='$email',telefone='$telefone',titulo='$titulo',mensagem='$mensagem' WHERE id = '$id'";
			
			$todos = $this -> banco($sql,"exec");
			
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
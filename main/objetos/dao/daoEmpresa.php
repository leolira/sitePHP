<?php 
	
	class DaoEmpresa{
		
		
		function adicionarSobreEmpresa($obj){
			
			$titulo = $obj -> titulo;
			$descricao = $obj -> descricao;
			$ilustracao = $obj -> ilustracao;
			
			$sql = "INSERT INTO empresa (titulo,descricao,ilustracao) VALUES ('$titulo','$descricao','$ilustracao')";
		
			$this -> banco($sql,"query");
		}
		
		function apagarSobreEmpresa($id){
			
			$sql = "DELETE FROM empresa WHERE id = $id";
			$this -> banco($sql,"exec");
		}
		
		function atualizarSobreEmpresa($obj){
			
			$id = $obj -> id;
			$titulo = $obj -> titulo;
			$descricao = $obj -> descricao;
			$ilustracao = $obj -> ilustracao;
			
			$sql = "UPDATE empresa SET titulo='$titulo',descricao='$descricao',ilustracao='$ilustracao' WHERE id = '$id'";
			
			$this -> banco($sql,"exec");
		}
		
		function banco($sql,$tipo){
			
			include'objtos/config.inc.php';
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
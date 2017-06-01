<?php
	require_once 'dao/daoBlog.php';
	
	class Blog{
			
		private $id;
		private $titulo;
		private $conteudo;
		private $assinatura;
		private $data;
		
		public function __set($atrib, $value){
			
			$this->$atrib = $value; 
		} 

		public function __get($atrib){
			
		return $this->$atrib;
			
		}
		
		public function buscarBlog($id){
			$dao = new DaoBlog();
			return $dao -> buscarBlog($id);
			
		}
		
		public function listarBlog(){
			$dao = new DaoBlog();
			return $dao -> listarBlog();
			
		}
		
		public function adicionarPostagem($obj){
			$dao = new DaoBlog();
			return $dao -> adicionarPostagem($obj);
			
		}
		
		public function atualizarPostagem($obj){
			$dao = new DaoBlog();
			return $dao -> atualizarPostagem($obj);
			
		}
		public function apagarPostagem($obj){
			$dao = new DaoBlog();
			return $dao -> apagarPostagem($obj);
		
		}
	}
 ?>
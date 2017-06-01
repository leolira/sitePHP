<?php
	require_once 'dao/daoEmpresa.php';
	class Empresa{
			
		private $titulo;
		private $descricao;
		private $ilustracao;
		
		public function __set($atrib, $value){
			
			$this->$atrib = $value; 
		} 

		public function __get($atrib){
			
		return $this->$atrib;
		
		}
		public function adicionarSobreEmpresa($obj){
			$dao = new DaoEmpresa();
			$dao -> adicionarSobreEmpresa($obj);
			
		}
		public function atualizarSobreEmpresa($obj){
			$dao = new DaoEmpresa();
			$dao -> atualizarSobreEmpresa($obj);
			
		}
		public function apagarSobreEmpresa($id){
			
			$dao = new DaoEmpresa();
			$dao -> apagarSobreEmpresa($id);
		}
	}
 ?>
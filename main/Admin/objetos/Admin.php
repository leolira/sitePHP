<?php
	require_once 'dao/daoAdmin.php';
	
	class Admin{
	
		private $id;
		private $nome;
		private $email;
		private $senha;
		private $telefone;
		
		public function __set($atrib, $value){
			
			$this->$atrib = $value; 
		} 

		public function __get($atrib){
			
			return $this->$atrib;
		
		}
		public function cadastrarAdmin($obj){
			$dao = new DaoAdmin();
			return $dao -> adicionarAdmin($obj);
		}
		public function atualizarAdmin($obj){
			$dao = new DaoAdmin();
			return $dao -> atualizarAdmin($obj);
		}
		public function removerAdmin($id){
			$dao = new DaoAdmin();
			return $dao -> removerAdmin($id);
		}
		public function listarAdmin(){
			$dao = new DaoAdmin();
			return $dao -> listaAdmin();
		}
	
	}
 ?>
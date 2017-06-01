<?php
	class Servicoes{
		
		private $titulo;
		private $descricao;
		private $ilustracao;
		
		public function __set($atrib, $value){
			
			$this->$atrib = $value; 
		} 

		public function __get($atrib){
			
		return $this->$atrib;
		
		}
		public function adcionarServico(){
			
		}
		public function atualizarServico(){
			
		}
		public function removerServico(){
			
		}
		public function listarSevico(){
			
		}
	}
 ?>
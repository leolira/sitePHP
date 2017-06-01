 <?php
	require_once 'dao/daoContato.php';
	
	class Contato{
		
		private $id;
		private $nome;
		private $email;
		private $telefone;
		private $titulo;
		private $mensagem;
		
		public function __set($atrib, $value){
			
			$this->$atrib = $value; 
		} 

		public function __get($atrib){
			
		return $this->$atrib;
		
		}
		public function escreverContato($obj){
			$dao = new DaoContato();
			$dao -> escreverContato($obj);
		}
		public function gerenciaContato($obj){
			$dao = new DaoContato();
			$dao -> gerenciaContato($obj);
			
		}
		public function apagarContato($id){
			$dao = new DaoContato();
			$dao -> apagarContato($id);
		}
		public function modificarContato($obj){
			$dao = new DaoContato();
			$dao -> modificarContato($obj);
		}
	
	}
 ?>
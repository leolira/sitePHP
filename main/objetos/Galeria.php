 <?php
	require_once 'dao/daogaleria.php';
	class Galeria{
		
		private $id;
		private $descricao;
		private $data;
		private $ilustracao;
		
		public function __set($atrib, $value){
			
			$this->$atrib = $value; 
		} 

		public function __get($atrib){
			
		return $this->$atrib;
		
		}
		public function listarImagem(){
			$dao = new DaoGaleria();
			return $dao -> listarImagem();
			
		}
		public function listarVideo(){
			
			$dao = new DaoGaleria();
		    return $dao -> listarVideo();
			
		}
	}
 ?>
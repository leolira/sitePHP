 <?php
	class FazerLogin{
		private $nome;	
		private $senha;
		
		public function __set($atrib, $value){
			
			$this->$atrib = $value; 
		} 

		public function __get($atrib){
			
		return $this->$atrib;
		
		}
		public function fazerLogin(){
			
		}
		public function fazerLogout(){
			
		}
	}
 ?>
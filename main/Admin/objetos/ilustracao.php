<?php

require_once 'dao/daoIlustracao.php';

class Ilustracao{

	private	$id;
	private	$descricao;
	private $tipoIlustracao;
	
	
	/*contrutor exemplo
	function __construct($id,$descricao,$tipIlustracao){
		
		$this -> id = $id;

		$this -> descricao =  $descricao;

		$this -> tipoIlustracao = $tipoIlustracao;
	}
	*/
	
	public function __set($atrib, $value){
		$this->$atrib = $value; 
		} 

	public function __get($atrib){
		
	return $this->$atrib;
		}

	public function getId(){

		return $this -> id;

	}
	public function setId($id){

		$this -> id = $id;

	}
	public function getDescricao(){

		return $this -> descricao;

	}
		
	public function setDescricao($descricacao){

		$this -> descricao = $descricacao ;

	}
	
	public function getTipoIlustracao(){

		return $this -> TipoIlustracao;
	}
		
	public function setTipoIlustracao($TipoIlustracao){

		$this -> TipoIlustracao = $TipoIlustracao;
	}
	
	public function adicionarIlustracao($obj){	
		$dao = new DaoIlustracao();
		return $dao -> adicionarIlustracao($obj);
		
	}
	function buscarIlustracao($id){
		$dao = new DaoIlustracao();
		return $dao -> buscarIlustracao($id);
	}
	public function removerIlustracao($id){	
	
		$dao = new DaoIlustracao();
		return $dao -> removerIlustracao($id);
	}
	public function listarIlustracao(){
		
		$dao = new DaoIlustracao();
		
		return $dao -> listarIlustracao();
		
	}
	public function atualizarIlustracao($obj){	
	
		$dao = new DaoIlustracao();
		return $dao -> atualizarIlustracao($obj);
	}
	public function adicionarDescricao($id,$descricao){	
	
		$dao = new DaoIlustracao();
		return $dao -> adicionarDescricao($id,$descricao);
	}
	public function atualizarDescricao($id,$descricao){	
	
		$dao = new DaoIlustracao();
		return $dao -> atualizarDescricao($id,$descricao);
		
	}
	
	public function removerDescricao($id){
		
		$dao = new DaoIlustracao();
		return $dao -> removerDescricao($id);
		
	}

}

?> 
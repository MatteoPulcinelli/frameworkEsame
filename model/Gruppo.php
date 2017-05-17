<?php 
class Gruppo{
	private $id;
	private $nome;
	
	function getID(){
		return $this->id;
	}
	
	function getNome(){
		return $this->nome;
	}
	
	function setID($v){
		$this->id=$v;
	}
	
	function setNome($v){
		$this->nome=$v;
	}
	
	function save(){
		TabellaGruppi::save($this);
	}
}
?>

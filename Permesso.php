<?php 
class Permesso{
	private $id;
	private $descrizione;
	
	function getID(){
		return $this->id;
	}
	
	function getDescrizione(){
		return $this->descrizione;
	}
	
	function setID($v){
		$this->id=$v;
	}
	
	function setDescrizione($v){
		$this->descrizione=$v;
	}
	
	function save(){
		TabellaPermessi::save($this);
	}
}
?>

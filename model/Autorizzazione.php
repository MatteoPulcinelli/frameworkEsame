<?php 
class Autorizzazione{
	private $id;
	private $id_permesso;
	private $id_gruppo;
	
	function getID(){
		return $this->id;
	}
	
	function getIDGruppo(){
		return $this->id_gruppo;
	}
    
    function getIDPermesso(){
        return $this->id_permesso;
    }
	
	function setID($v){
		$this->id=$v;
	}
	
	function setIDGruppo($v){
		$this->id_gruppo=$v;
	}
	
	function setIDPermesso($v){
		$this->id_permesso=$v;
	}
	
	function save(){
		TabellaAutorizzazioni::save($this);
	}
}
?>

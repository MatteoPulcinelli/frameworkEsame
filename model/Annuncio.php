<?php 
class Annuncio{
	private $id;
	private $titolo;
    private $descrizione;
	private $data;
    private $visualizzazioni;
    private $id_utente;
    private $id_provincia;
    private $id_razza;
	
	function getID(){
		return $this->id;
	}
	
    function getTitolo(){
        return $this->titolo;    
    }
    
    function getDescrizione(){
        return $this->descrizione;    
    }
    
    function getVisualizzazioni(){
        return $this->visualizzazioni
    }
	
	function getData(){
		return $this->data;	
	}
    
    function getIDUtente(){
        return $this->id_utente;    
    }
    
    function getIDProvincia(){
        return $this->id_provincia;
    }
    
    function getIDRazza(){
        return $this->id_razza;
    }
    
	function setID($v){
		$this->id=$v;
	}
	
	function setTitolo($v){
		$this->titolo=$v;
	}
	
	function setDescrizione($v){
		$this->descrizione=$v;
	}
	
	function setData($v){
		$this->data=$v;	
	}
	
	function setVisualizzazioni($v){
		$this->visualizzazioni=$v;
	}
	
	function setIDUtente($v){
		$this->id_utente=$v;
	}
	
	function setIDProvincia($v){
		$this->id_provincia=$v;
	}
	
	function setIDRazza($v){
		$this->razza=$v;
	}
	
	function save(){
		TabellaAnnunci::save($this);
	}
}
?>

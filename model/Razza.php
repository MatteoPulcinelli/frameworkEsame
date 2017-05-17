<?php
class Razza{
    private $id;
    private $nome;
    private $descrizione;
    private $id_specie;
    
    function getID(){
        return $this->id;
    }
    
    function getNome(){
        return $this->nome;
    }
    
    function getDescrizione(){
        return $this->descrizione;
    }
    
    function getIDSpecie(){
        return $this->id_specie;
    }
    
    function setID($v){
        $this->id=$v;
    }
    
    function setNome($v){
        $this->nome=$v;
    }
    
     function setDescrizione($v){
        $this->descrizione=$v;
    }
    
     function setIDSpecie($v){
        $this->id_specie=$v;
    }
}
?>

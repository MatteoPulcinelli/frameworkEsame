<?php 
class Provincia{
    private $id;
    private $nome;
    private $sigla;
    private $id_regione;
    
    function getID(){
        return $this->id;
    }
    
    function getNome(){
        return $this->nome;
    }
    
    function getSigla(){
        return $this->sigla;
    }
    
    function getIDRegione(){
        return $this->id_regione;
    }
    
    function setID($v){
        $this->id=$v;
    }
    
    function setNome($v){
        $this->nome=$v;
    }
    
    function setSigla($v){
        $this->sigla=$v;
    }
    
    function setIDRegione($v){
        $this->id_regione=$v;
    }
}
?>

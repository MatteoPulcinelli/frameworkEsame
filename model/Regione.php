<?php
class Regione{
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
    
    function setNome(){
        $this->nome=$v;
    }
}
?>

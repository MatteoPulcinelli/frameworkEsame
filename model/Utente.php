<?php 
class Utente{
	private $id;
	private $email;
	private $password;
	private $nome;
	private $telefono;
	private $id_gruppo;
	
	function getID(){
		return $this->id;
	}
	
	function getEmail(){
		return $this->email;
	}
	
	function getPassword(){
		return $this->password;
	}
	
	function getNome(){
		return $this->nome;
	}
	
	function getTelefono(){
		return $this->telefono;
	}
	
	function getIDGruppo(){
		return $this->id_gruppo;
	}
	
	function setID($v){
		$this->id=$v;
	}
	
	function setEmail($v){
		$this->email=$v;
	}
	
	function setPassword($v){
		$this->password=$v;
	}
	
	function setNome($v){
		$this->nome=$v;
	}
	
	function setTelefono($v){
		$this->telefono=$v;
	}
	
	function setIDGruppo($v){
		$this->id_gruppo=$v;
	}
	
	function setDescrizione($v){
		$this->descrizione=$v;
	}
	
	function save(){
		TabellaUtenti::save($this);
	}
}
?>

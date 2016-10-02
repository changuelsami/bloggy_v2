<?php
include("???.php");
class Contact extends Mysql 
{
	// Attributs de la classe
	private $_id;
	private $_email;
	private ???;
	private ???;
	private ???;
	private $_d_ajout;

	// Setters
	public function set_id($id) {
		$this->_id = $id;
	}

	public function set_email($email) {
		$this->_email = $email;
	}

	public function set_sujet($sujet) {
		???
	}

	public function set_newsletter($newsletter) {
		???
	}

	public function ??? {
		???
	}

	// Getters
	public function get_id() {
		return $this->_id;
	}

	??? function get_email() {
		???
	}

	public ??? get_sujet() {
		???
	}

	??? ??? get_message() {
		???
	}
  
	public function ??? {
		???
	}

	// Autres méthodes
	public function ajouter()
	{
	    //print_r(get_object_vars($this));
	    if (!isset($this->_email) || 
	    	!isset(???) || 
	    	!???(???)     	)
	    	return false;
	    $q = "INSERT INTO contact(id, email, sujet, message, newsletter, d_ajout) VALUES 
	  		(  null				  , '$this->_email'	,
			  ???	  , ???	,
			  ???  , NOW()
			)";		
		$res = $this->requete($q);

		return mysqli_insert_id($this->get_cnx());	// Renvoi l'id de l'enregistrement ajouté		
	}
	
	public function ???(){
		$q = "DELETE FROM contact WHERE id = '$this->_id'";
		$res = $this->requete($q);
		return $res;
	}
}
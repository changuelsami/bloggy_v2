<?php
include("Mysql.php");
class Contact extends Mysql 
{
	// Attributs de la classe
	private $_id;
	private $_email;
	private $_sujet;
	private $_message;
	private $_newsletter;
	private $_d_ajout;

	// Méthode magique pour les setters & getters
	public function __get($property) {
		if (property_exists($this, $property)) {
                return htmlentities( $this->$property );
            }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
        	if ($property == "_newsletter")
        		$this->$property = (empty($value)) ? 0 : 1;
        	else
            	$this->$property = $value;
        }
    }


	// Autres méthodes
	public function ajouter()
	{
	    try {
	    if (!isset($this->_email) || 
	    	!isset($this->_sujet) || 
	    	!isset($this->_message)
	    	)
	    	return false;
	    $q = "INSERT INTO contact(id, email, sujet, message, newsletter, d_ajout) 
	    	  VALUES (null, :email, :sujet, :message,:newsletter, NOW())";
		$stmt = $this->get_cnx()->prepare($q);

		$stmt->bindParam(':email', $this->_email);
		$stmt->bindParam(':sujet', $this->_sujet);
		$stmt->bindParam(':message', $this->_message);
		$stmt->bindParam(':newsletter', $this->_newsletter);

		$stmt->execute();

		return $this->get_cnx()->lastInsertId();
		} catch (PDOException $e) {
		    exit("<pre>Erreur de connexion à la BdD : " . $e->getMessage() . "<br/>");
		}

	}
	
	public function supprimer()
	{
		$q = "DELETE FROM contact WHERE id = :id";
		$stmt = $this->get_cnx()->prepare($q);
		$stmt->bindParam(':id', $this->_id);
		return ($stmt->execute() == true);
	}

	public function liste()
	{
		$q = "SELECT * FROM contact ORDER BY d_ajout DESC";
		$liste = array(); // Tableau VIDE
		$res = $this->get_cnx()->query($q);
		foreach ($res as $row)
		{
			$c = new Contact();

			$c->_id 	 = $row['id'];
			$c->_sujet 	 = $row['sujet'];
			$c->_email 	 = $row['email'];
			$c->_d_ajout = $row['d_ajout'];
		
			$liste[]=$c;
		}
		
		return $liste; // Renvoi un tableau d'objets
	}	
}
<?php
class Mysql
{
	private $_serveur = "127.0.0.1";
	private $_login = "root";
	private $_mdp	= "root";
	private $_bdd	= "bloggy_v1";
	private $_cnx;

	public function get_cnx()
	{
		return $this->_cnx;
	}
	
	public function __construct()
	{
		try {
		    $this->_cnx = new PDO('mysql:host=localhost;dbname=bloggy_v1', 
		    						$this->_login, $this->_mdp);
		} catch (PDOException $e) {
		    exit("<pre>Erreur de connexion à la BdD : " . $e->getMessage() . "<br/>");
		}
	}
	
	public function requete($q)
	{
		try {
			$res = $this->_cnx->query($q);
			return $res;
		}
		catch (PDOException $e){
			exit("<pre>Erreur dans la requete [$q] : " . $e->getMessage() . "</pre>");

		}
	}
}

?>

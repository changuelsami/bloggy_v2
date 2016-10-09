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

		$this->_cnx = new mysqli($this->_serveur, $this->_login, $this->_mdp, $this->_bdd);
		if ( $this->_cnx->connect_error ) {
		    die('Erreur de connexion ' . $this->_cnx->connect_error);
		}
	}
	
	public function requete($q)
	{
		$res = $this->_cnx->query($q); //multi_query() comme query() mais permet d'exécuter plusieurs requêtes séparées par ;
		if (!$res)
			exit("<pre>Erreur dans la requete [$q] : " . $this->_cnx->error . "</pre>");
		return $res;
	}
}

?>

<?php
class Util
{
	/**
	 * Méthode permettant de faire l'upload d'un fichier vers le serveur
	 *
	 * @param 	string 	$file_field_name	L'attribut 'name' de l'input de type 'file'
	 * @param 	string 	$path 				Le dossier cible où sera uploadé le fichier
	 * 
	 * @return 	string 	Le nom physique du fichier uploadé si tout est ok, chaine vide sinon
	 */
	public function upload($file_field_name, $path)
	{

		$newFileName = $_FILES[$file_field_name]['name'];
		if( !move_uploaded_file( $_FILES[$file_field_name]['tmp_name'], $path.'/'.$newFileName) )
			return "";
		return  $newFileName ;
	}
}
?>
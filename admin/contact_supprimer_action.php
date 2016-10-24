<?php
	$id = $_GET['id'];

	require_once("../classes/Contact_OK2.php");
	$contact = new Contact();
	$contact->_id = $id;

	$contact->supprimer();

	header("Location: contact_liste.php");	
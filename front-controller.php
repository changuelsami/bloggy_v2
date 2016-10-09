<?php
require_once("header.inc.php");

$page = $_GET['page'];
if(empty($page))
	require_once("home.php");
else
	require_once($page . ".php");

require_once("footer.inc.php"); 
?>
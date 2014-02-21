<?php 

// fichier traitement.php
require_once("lib/functions.php");
	error_reporting(E_ALL); 
	ini_set("display_errors", 1); 

// persist les données soumis par le formulaire.
saveAllDataToBase($_POST);

?>
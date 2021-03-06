<?php
 	 error_reporting(E_ALL); 
	 ini_set("display_errors", 1); 

/**
*	Return the current connexion PDO object 
**/
function connexion() {
		
		try{

			$bdd = new PDO('mysql:host=nvd-sql-01.sadm.ig-1.net;dbname=annickgoutal','annickgoutal','ceil9iethohB',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		    
		}catch(PDOException $e){
		    echo "Connexion Impossible à la BDD";
		}
		 
		return $bdd;
}

function getDataFromBase() {
	
	$bd = connexion();
	$response = $bd -> query("SELECT * FROM client");
}

function saveAllDataToBase($post) {

	if (isset($post['fname'])){

		// Verification du nombre de caracteres dans les champs du formulaire.
		$nbCharOk = TRUE;
		$nbCharOk = controlNbChar($post);
		$fieldsIsEmpty = checkEmptyField($post);
		// protege les mails de la casse.
		$post['mail'] = strtolower ($post['mail']);

		if ($fieldsIsEmpty == TRUE) {

			return 4; 
		}
		
		if ($nbCharOk == FALSE) {
			
			return 2; 
		}
		else if (checkMailFormat($post['mail']) == FALSE) {

			return 3;
		}
		else if ("" == $post['day-birth'] || "" == $post['month-birth'] || "" == $post['year-birth']) {

			return 5;
		}
	}
	
	if (isset($post['news']) && $post['news'] == "on") {
		$news = 1;
	}
	else {
		$news = 0;
	}

	$bdd = connexion();
	
	$date = setDateFormat($post);

	$dateCreation = date("d-m-Y");

	$idCo = (int)$post['country'];
	 
	/*$datetime = new DateTime;
	$datetime = $datetime->format( 'Y-m-d H:i:s');*/
	 
	$reponse  = $bdd->prepare('INSERT INTO client (titre,first_name,last_name,date_birth, city, email,fk_country, letter, date_creation)
								VALUES(:title,:fname,:lname,:date_birth,:city,:email,:fk_country,:letter, :date_creation)');
								
	//$reponse  = $bdd->prepare('INSERT INTO client (titre,first_name,last_name,date_birth, city, email,fk_country, letter)
	//							VALUES(:title,:fname,:lname,:date_birth,:city,:email, :letter)');
	 
	$reponse->bindValue(':title', $post['title'] ,PDO::PARAM_STR);
	$reponse->bindValue(':fname', $post['fname'] ,PDO::PARAM_STR);
	$reponse->bindValue(':lname', $post['lname'] ,PDO::PARAM_STR);
	$reponse->bindValue(':date_birth', $date ,PDO::PARAM_STR);
	$reponse->bindValue(':city', $post['city'] ,PDO::PARAM_STR);
	$reponse->bindValue(':email', $post['mail'] ,PDO::PARAM_STR);
	$reponse->bindValue(':fk_country', $idCo, PDO::PARAM_INT);
	$reponse->bindValue(':date_creation', $dateCreation ,PDO::PARAM_STR);
	//$reponse->bindValue(':fk_country', 2); // la!
	$reponse->bindValue(':letter', $news);
	
	$reponse->execute() or die(print_r($reponse->errorInfo(), TRUE));
    
	return 1;
	//return $post;
    //header("Location: http://www.annickgoutal.us/index2.php?success=1");die;
}

function setDateFormat($post) {
	
	$dateToStringFr = "".$post['day-birth']."-".$post['month-birth']."-".$post['year-birth'];

	// if ("DD" == $post['day-birth'] || "MM" == $post['month-birth'] || "YYYY" == $post['year-birth']) {

	// 	return 5;
	// }
	
	return trim($dateToStringFr);
}

// tester la fonction.
function getAllCountries() {
	
	try{
		$bdd = new PDO('mysql:host=nvd-sql-01.sadm.ig-1.net;dbname=annickgoutal','annickgoutal','ceil9iethohB',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);


	}catch(PDOException $e){
		echo "Connexion Impossible à la BDD";
	}
	$response = $bdd ->query("SELECT * FROM country ORDER BY libelle ASC;");
	
	$donnees = $response->fetchAll();

	foreach ($donnees as $key => $country) {
		
		$AllCountries[$key] = $country;
	}
	
	return $AllCountries;
}

function controlNbChar($post) {

	if (strlen($post['fname']) > 38)
		return FALSE;
	elseif (strlen($post['lname']) > 38)
		return FALSE;
	elseif (strlen($post['city']) > 38)
		return FALSE;
	elseif (strlen($post['mail']) > 38) 
		return FALSE;
	return TRUE;
}

function checkEmptyField($post) {
	
	if (strlen($post['fname']) == 0)
		return TRUE;
	elseif (strlen($post['lname']) == 0)
		return TRUE;
	elseif (strlen($post['city']) == 0)
		return TRUE;
	elseif (strlen($post['mail']) == 0) 
		return TRUE;
	return FALSE;
	
}

// Vérifie le format de l'email saisie dans le formulaire.
function checkMailFormat($mail) {

	// regex pour les mails aux format aa@a.aa
	/* $regex = "/^[a-zØ-9._-]{2,}@[a-zØ-9._-]+$/"; */
	$regex = "/^[a-z0-9._-]{2,}@[a-z0-9._-]+.[a-z]{2,}$/";
	$mail = trim($mail);
	//$return = preg_match($regex, $mail, $results);
	$return = preg_match($regex, $mail);
	
	if ($return == 1)
		return TRUE;
	else
		return FALSE;
}
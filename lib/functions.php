<?php
/**
*	Return the current connexion PDO object 
**/
function connexion() {

		try{
		    $DB = new PDO('mysql:host=http://nvd-sql-01.sadm.ig-1.net/;dbname=annickgoutal','annickgoutal','ceil9iethohB',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		    $DB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		    $DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		    
		    
		}catch(PDOException $e){
		    echo "Connexion Impossible à la BDD";
		}
		 
		return $DB;
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
		
		//var_dump($nbCharOk);
		if ($nbCharOk == FALSE) {
			
			header("Location: http://localhost:8888/Projets/NovediaProject/AnnickGoutal?success=2");die;
		}
		else if (checkMailFormat($post['mail']) == FALSE) {
			header("Location: http://localhost:8888/Projets/NovediaProject/AnnickGoutal?success=3");die;
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
	$co = (int)$post['country'];

	
	$reponse = $bdd->prepare('INSERT INTO client (titre,first_name,last_name,date_birth, city, email,fk_country, letter)
								VALUES(:title,:fname,:lname,:date_birth,:city,:email,:fk_country, :letter)');
				   
	
	$reponse -> execute(array(
	'title'=>$post['title'],
	'fname'=>$post['fname'],
	'lname'=>$post['lname'],
	'date_birth'=>$date,
	'city' => $post['city'],
	'email'=>$post['mail'],
    'fk_country' => $post['country'],
    'letter' => $news ));
    
    
    header("Location: http://localhost:8888/Projets/NovediaProject/AnnickGoutal?success=1");die;
	
}


// return date in string format
function setDateFormat($post) {
	
	//$dateToStringUs = "".$post['month-birth']."/".$post['day-birth']."/".$post['year-birth'];
	$dateToStringFr = "".$post['day-birth']."/".$post['month-birth']."/".$post['year-birth'];
	
	return trim($dateToStringFr);
}


// tester la fonction.
function getAllCountries() {
	

	$bdd = new PDO('mysql:host=http://nvd-sql-01.sadm.ig-1.net/;dbname=annickgoutal','annickgoutal','ceil9iethohB');
	
	$response = $bdd ->query("SELECT * FROM country");
	
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



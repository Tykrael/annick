<?php

	 error_reporting(E_ALL); 
	 ini_set("display_errors", 1); 
	// script d'exportation des utilisateur de la base au format CSV
	
	//$bdd = new PDO('mysql:host=localhost;dbname=annick_goutal','root','root');
	try{
		    $bdd = new PDO('mysql:host=localhost;dbname=annick_goutal','root','root',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		    
		}catch(PDOException $e){
		    echo "Connexion Impossible à la BDD";
		}

	$result = $bdd->query("SELECT  * FROM client AS cl INNER JOIN country AS c
							WHERE c.id_country = cl.fk_country");
	
	$donnees = $result->fetchAll();
	
	foreach ($donnees as $key => $dataContent) {
		/*
		$arrayToExport [$key]['id'] = $dataContent['id'];
		$arrayToExport [$key]['titre'] = $dataContent['titre'];
		$arrayToExport [$key]['first_name'] = $dataContent['first_name'];
		$arrayToExport [$key]['last_name'] = $dataContent['last_name'];
		$arrayToExport [$key]['date_birth'] = $dataContent['date_birth'];
		$arrayToExport [$key]['city'] = $dataContent['city'];
		$arrayToExport [$key]['email'] = $dataContent['email'];
		$arrayToExport [$key]['fk_country'] = $dataContent['libelle'];
		$arrayToExport [$key]['news'] = $dataContent['letter'];*/
		
		$arrayToExport [$key]['id'] = $dataContent->id;
		$arrayToExport [$key]['titre'] = $dataContent->titre;
		$arrayToExport [$key]['first_name'] = $dataContent->first_name;
		$arrayToExport [$key]['last_name'] = $dataContent->last_name;
		$arrayToExport [$key]['date_birth'] = $dataContent->date_birth;
		$arrayToExport [$key]['city'] = $dataContent->city;
		$arrayToExport [$key]['email'] = $dataContent->email;
		$arrayToExport [$key]['fk_country'] = $dataContent->libelle;
		$arrayToExport [$key]['news'] = $dataContent->letter;
		$arrayToExport [$key]['date_creation'] = $dataContent->date_creation;
	}
	
	$chaine = null;
	$chaine .= "ident;title;first name;last name;date birth;city;email;newsletter;country;date creation\n";
	
	foreach ($arrayToExport as $item) {

			$news = "subscribed";
			if ($item['news'] == NULL || $item['news'] != 1)
			$news = "Uncommitted";

    		$chaine .= $item['id'].";".$item['titre'].";".$item['first_name'].";".$item['last_name'].";".$item['date_birth'].";".$item['city'].";".$item['email'].";".$news.";".$item['fk_country'].";".$item['date_creation']."\n";
    	}
    	
    	header("Content-disposition: attachment; filename=adherent.csv");
    	header("Content-Type: application/force-download");
    	echo $chaine;
	

<?php

	// script d'exportation des utilisateur de la base au format CSV
	
	$bdd = new PDO('mysql:host=localhost;dbname=annick_goutal','root','root');

	$result = $bdd->query("SELECT  * FROM client AS cl INNER JOIN country AS c
							WHERE c.id_country = cl.fk_country");
	
	$donnees = $result->fetchAll();
	
	
	foreach ($donnees as $key => $dataContent) {
		
		$arrayToExport [$key]['id'] = $dataContent['id'];
		$arrayToExport [$key]['titre'] = $dataContent['titre'];
		$arrayToExport [$key]['first_name'] = $dataContent['first_name'];
		$arrayToExport [$key]['last_name'] = $dataContent['last_name'];
		$arrayToExport [$key]['date_birth'] = $dataContent['date_birth'];
		$arrayToExport [$key]['city'] = $dataContent['city'];
		$arrayToExport [$key]['email'] = $dataContent['email'];
		$arrayToExport [$key]['fk_country'] = $dataContent['libelle'];
		$arrayToExport [$key]['news'] = $dataContent['letter'];		
	}
	
	$chaine = null;
	$chaine .= "ident;title;first name;last name;date birth;city;email;newsletter;country\n";
	foreach ($arrayToExport as $item) {

			$news = "subscribed";
			if ($item['news'] == NULL || $item['news'] != 1)
			$news = "Uncommitted";

    		$chaine .= $item['id'].";".$item['titre'].";".$item['first_name'].";".$item['last_name'].";".$item['date_birth'].";".$item['city'].";".$item['email'].";".$news.";".$item['fk_country']."\n";
    	}
    	
    	//var_dump("<PRE>",$chaine);die;
    	// on exporte la liste des CuIDs des users non-Gassi
    	header("Content-disposition: attachment; filename=CuID_User_Non_Gassi.csv");
    	header("Content-Type: application/force-download");
    	echo $chaine;
	

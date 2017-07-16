<?php
	try{

		$bd = new PDO('mysql:host=localhost;dbname=entreprise_de_distribution;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	} catch(Exception $e){
		die("erreur connexion: ".$e->getMessage());
	}
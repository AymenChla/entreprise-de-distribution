<?php 

	//modifier le carnet
	function modifierCarnet($prenom,$nom,$tel,$adresse,$ville)
	{
		global $bd;
		$sql = "UPDATE client SET PRENOM = :prenom, NOM = :nom, TEL = :tel , ADRESSE = :adresse, VILLE = :ville WHERE NOCLI = :id";
		$req = $bd->prepare($sql);
		$req->execute(array( 'prenom' => $prenom, 
							 'nom' => $nom, 
							 'tel' => $tel , 
							 'adresse' => $adresse,
							 'ville' => $ville,
							 'id' => $_SESSION['user']['nocli']));
		$req->closeCursor();
	}
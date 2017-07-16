<?php 
	
	//modifier prenom nom sexe du client
	function modifierInformations($prenom,$nom,$sexe,$date_naissance)
	{
		global $bd;
		$sexe = ($sexe == 'homme') ? 1 : 0;
		$sql = "UPDATE client SET PRENOM = :prenom, NOM = :nom, SEXE = :sexe , DATE_NAISSANCE = :date_naissance WHERE NOCLI = :id";
		$req = $bd->prepare($sql);
		$req->execute(array( 'prenom' => $prenom, 
							 'nom' => $nom, 
							 'sexe' => $sexe , 
							 'date_naissance' => $date_naissance,
							 'id' => $_SESSION['user']['nocli']));
		$req->closeCursor();
	}
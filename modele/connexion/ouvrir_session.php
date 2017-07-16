<?php 
	function ouvrir_session($id)
	{
		global $bd;
		$sql = "SELECT * FROM client WHERE NOCLI = :id";
		$req = $bd->prepare($sql);
		$req->execute(array("id"=>$id));
		if($client = $req->fetch())
		{
			$_SESSION['user'] =  array();
			$_SESSION['user']['nocli'] =  $client['NOCLI'];
			$_SESSION['user']['nom']  = $client['NOM'];
			$_SESSION['user']['prenom'] = $client['PRENOM'];
			$_SESSION['user']['sexe'] = $client['SEXE'];
			$_SESSION['user']['date_naissance'] = $client['DATE_NAISSANCE'];
			$_SESSION['user']['email'] = $client['EMAIL'];
			$_SESSION['user']['tel'] = $client['TEL'];
			$_SESSION['user']['adresse'] = $client['ADRESSE'];
			$_SESSION['user']['ville'] = $client['VILLE'];
			$_SESSION['user']['cp'] = $client['CP'];
			$_SESSION['user']['ca'] = $client['CA'];
			$_SESSION['user']['depot_p'] = $client['NOD'];
			$_SESSION['user']['depot_s'] = $client['NOD_livraison_secours'];

		}
		
	}
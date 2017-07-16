<?php 

//ajout clien a la base
if(isset($_POST['submit']))
{
		extract($_POST);
        
        //verifier l'email avant l'ajout
        include_once "modele/monCompte/verifierEmail.php";
        if(verifierEmail($email))
        {
        	//ajout client a la base
        	include_once "modele/enregistrer/ajout_client.php";
        	$password = sha1($_POST['password']);
        	$prenom = ucfirst($prenom);
        	$nom = strtoupper($nom);
        	$sexe = ($sexe == 'homme') ? 1 : 0;

        	//ajout de client a la base
        	ajout_client();
        	
        	//connecter le nouveau inscrit
        	if(isset($_GET['statut']))
        		include_once("controleur/connexion/index.php");
        }
        else
        {
        	$erreur = "Email déjà utilisé";

        	//reaffichage du formulaire
        	include_once("vue/enregistrer/index.php");
        }
		
}
//affichage
else{
	
	include_once "modele/enregistrer/get_depots.php";
	$depots = get_depots();

	foreach ($depots as $key => $depot) {
		$depot_p[$key]['NOD'] = htmlspecialchars($depot['NOD']);
		$depots[$key]['VILLE_DEP'] = htmlspecialchars($depot['VILLE_DEP']);
	}

	include_once "vue/enregistrer/index.php";
}

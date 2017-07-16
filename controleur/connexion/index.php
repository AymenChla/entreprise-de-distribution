<?php 

if(isset($_GET['statut']))
{
	//se connecter => creer une session
	if($_GET['statut'] == 1)
	{
		if(isset($_POST['email']) && isset($_POST['password']))
		{
			extract($_POST);
			include_once("modele/connexion/verification_connexion.php");
			$id = verification_connexion($email, $password);
			if($id != NULL)
			{
				include_once("modele/connexion/ouvrir_session.php");
				ouvrir_session($id);

				//si on se connecte pour valider le panier
				if(isset($_GET['target']))
				{
					//redirection vers la page de paiement
					header("location:?session=panier&statut=valider");
				}
				else
				{	
					//si connexion normale redirection vers le site
					header("location:?session=produits");
				}
			}
			else
			{
				$error = "email ou mot de passe incorect";
				include_once "vue/connexion/index.php";
			}
		}
	}

	//se déconnecter => supprimer la session
	else if($_GET['statut'] == 2)
	{
		unset($_SESSION['user']);
		//session_destroy();

		//redirection vers la page de connexion
		header("location:?session=connexion&statut=3");
	}

	//afficher la page de connexion
	else if($_GET['statut'] == 3)
	{
		//affichage du formulaire de connexion
		include_once("vue/connexion/index.php");
	}

	
}

	
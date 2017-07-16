<?php 
	
	if(isset($_SESSION['user']))
	{
		if($_GET['statut'] == 'parametre')
		{
			include_once("vue/monCompte/index.php");
		}
		else if($_GET['statut'] == 'informations')
		{
			//modification infos
			if(isset($_POST['submit']))
			{
				extract($_POST);
				$prenom = ucfirst($prenom);
				$nom = strtoupper($nom);

				//email non modifier
				if(empty($email))
				{

					//modification nom prenom sexe
					include_once("modele/monCompte/modifierInformations.php");
					modifierInformations($prenom,$nom,$sexe,$date_naissance);

					$success = "Mofification enregistré";
				}
				else //email modifier
				{
					//verifier email et modifer
					include_once("modele/monCompte/verifierEmail.php");
					if(verifierEmail($email))
					{
						//modification email
						include_once("modele/monCompte/modifierEmail.php");
						modifierEmail($email);


						//modification nom prenom sexe
						include_once("modele/monCompte/modifierInformations.php");
						modifierInformations($prenom,$nom,$sexe,$date_naissance);

						$success = "Modification enregistré";
					}
					else
					{
						$error = "E-mail déjà utilisé";
					}

				}

				

				//Actualiser la session
				include_once("modele/connexion/ouvrir_session.php");
				ouvrir_session($_SESSION['user']['nocli']);
			}

			include_once("vue/monCompte/informations.php");
		}
		else if($_GET['statut'] == 'carnet')
		{
			include_once("vue/monCompte/carnet.php");	
		}
		else if($_GET['statut'] == 'mesCommandes')
		{

			include_once("modele/monCompte/get_commandes.php");

			if(isset($_GET['d']))
			{
				$commandes = get_commandes(1);	
			}
			else
			{
				$commandes = get_commandes(1000);
			}
			

			include_once("vue/monCompte/mesCommandes.php");	
		}
		else if($_GET['statut'] == 'modifierEmail')
		{ 
			//modification email
			if(isset($_POST['submit']))
			{
				
				extract($_POST);
				
				//verifier email et modifer
				include_once("modele/monCompte/verifierEmail.php");
				if(verifierEmail($email))
				{
					include_once("modele/monCompte/modifierEmail.php");
					modifierEmail($email);

					//Actualiser la session
					include_once("modele/connexion/ouvrir_session.php");
					ouvrir_session($_SESSION['user']['nocli']);

					//pour le message de succes apres midification
					$success = "Votre E-mail à été modifier";
				}
				else
				{

					$error = "Email déjà utilisé";
				}
			}

			include_once("vue/monCompte/modifierEmail.php");
		}
		else if($_GET['statut'] == 'modifierPassword')
		{
			//modification password
			if(isset($_POST['submit']))
			{
				extract($_POST);

				//verifier password et modifer
				include_once("modele/monCompte/verifierPassword.php");
				include_once("modele/monCompte/modifierPassword.php");
				if(verifierPassword($password))
				{
					modifierPassword($nvPassword);

					//Actualiser la session
					include_once("modele/connexion/ouvrir_session.php");
					ouvrir_session($_SESSION['user']['nocli']);

					//pour message de succes
					$success = "Votre mot de passe a été changer";
				}
				else
				{
					//pour message d'erreur
					$error = "Mot de passe incorect";
				}
			}

			include_once("vue/monCompte/modifierPassword.php");
		}
		else if($_GET['statut'] == 'modifierCarnet')
		{

			if(isset($_POST['submit']))
			{
				extract($_POST);
				$prenom = ucfirst($prenom);
				$nom = strtoupper($nom);

				//modifier carnet
				include_once("modele/monCompte/modifierCarnet.php");
				modifierCarnet($prenom,$nom,$tel,$adresse,$ville);

				$success = "Modification enregistré";

				//Actualiser la session
				include_once("modele/connexion/ouvrir_session.php");
				ouvrir_session($_SESSION['user']['nocli']);

				//si la source est la page de validation du panier
				if(isset($_GET['src']))
				{	
					header("location:?session=panier&statut=valider");
				}
				
			}
			
			include_once("vue/monCompte/modifierCarnet.php");
		}
	}
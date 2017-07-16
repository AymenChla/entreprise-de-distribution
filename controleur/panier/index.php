<?php 
	
	if(isset($_GET['statut']))
	{	
		if($_GET['statut'] == "ajouter")
		{
			if(isset($_GET['nop']))
			{
				//ajout de l'article au panier
				include_once("modele/panier/creationPanier.php");
				include_once("modele/panier/isVerrouille.php");
				include_once("modele/panier/ajouterArticle.php");
				ajouterArticle($_GET['nop'],1);
				
				//redirection vers la page d'acceuil
				//header("location:?session=produits");
			}
		}
		else if($_GET['statut'] == 'afficher')
		{
			
			if(isset($_SESSION['panier']))
			{
				//liste des produits figurant dans le panier
				include_once("modele/produits/get_liste_produits.php");
				include_once("modele/panier/get_qtc.php");
				include_once("modele/panier/sous_total.php");
				$produits = get_liste_produits($_SESSION['panier']['nop']);

			
				//liste des quantitées maximales des produits figurant dans le panier
				include_once("modele/produits/get_qtds.php");
				$qtds = get_qtds($_SESSION['panier']['nop']);
				
				//trier la liste des quantitées maximales selon l'ordre des produits figurant dans le panier
				include_once("modele/panier/trier_qtds.php");
				$qtds_trier = trier_qtds($qtds,$produits);
				
				//calcule total htc
				include_once("modele/panier/htc.php");
				$htc = htc($produits);
				
				//calcule total ttc
				include_once("modele/panier/ttc.php");
				$ttc = ttc($htc);

			}
			
			
			//affichage du panier
			include_once("vue/panier/index.php");
			
		}
		else if($_GET['statut']=='modifier')
		{
			if(isset($_GET['nop']) && isset($_POST['qtc']))
			{
				//modifier la qtc dans le panier
				include_once("modele/panier/set_qtc.php");
				set_qtc($_GET['nop'],$_POST['qtc']);
				header('location:?session=panier&statut=afficher');
			}
			
		}
		else if($_GET['statut']=='supprimer')
		{
			if(isset($_GET['nop']))
			{
				include_once("modele/panier/creationPanier.php");
				include_once("modele/panier/isVerrouille.php");
				include_once("modele/panier/supProduit.php");

				supProduit($_GET['nop']);
				header('location:?session=panier&statut=afficher');
			}
		}
		else if($_GET['statut']=='valider')
		{
			if(isset($_SESSION['user']))
			{
				if(!empty($_SESSION['user']['adresse']))
				{
					include_once("controleur/facture/index.php");	
				}
				else
				{
					include_once("vue/monCompte/carnet.php");
				}
				
			}
			else{
				header('location:?session=connexion&statut=3&target=paiement');
			}
		}

	}	
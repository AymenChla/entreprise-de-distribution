<?php
	session_start();
				
	include_once("modele/connexion_bd.php");

	if(!isset($_GET['session']) OR $_GET['session'] == 'index')
	{
		include_once("controleur/accueil/index.php");
		
	}
	if(isset($_GET['session']))
	{
			if($_GET['session'] == 'admin')
			{
				include_once("admin/index.php");
			}
			else if($_GET['session'] == 'produits')
			{
				include_once("controleur/produits/index.php");
			}
			else if($_GET['session'] == 'enregistrer')
			{
				include_once("controleur/enregistrer/index.php");
			}
			else if($_GET['session'] == 'connexion')
			{
				include_once("controleur/connexion/index.php");
			}
			else if($_GET['session'] == 'panier')
			{
				include_once("controleur/panier/index.php");
			}
			else if($_GET['session'] == 'monCompte')
			{
				include_once("controleur/monCompte/index.php");
			}
			else if($_GET['session'] == 'contactez-nous')
			{
				include_once("controleur/contactez-nous/index.php");
			}
			else
			{
				include("vue/404/index.php");
			}
	}


<?php 

	if(isset($_GET['p']))
	{	
		if($_GET['p'] == "connexion")
		{
			include_once("admin/controleur/connexion/index.php");
		}
		else if($_GET['p'] == "ajout")
		{
			include_once("admin/controleur/ajout/index.php");
		}
		else if($_GET['p'] == "produits")
		{
			include_once("admin/controleur/produits/index.php");
		}
		else if($_GET['p'] == "client")
		{
			include_once("admin/controleur/client/index.php");
		}
	}
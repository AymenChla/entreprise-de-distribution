<?php 


if(!isset($_GET['id']))
{
		//pour la pagination
		include_once("modele/produits/get_nombre_produits.php");
		$nbProduits = get_nombre_produits();

		include_once("modele/produits/get_nombre_pages.php");
		$max_par_page = 10;
		$nbPages = get_nombre_pages($nbProduits , $max_par_page);

		
		if(isset($_GET['page']))
		{
			//conversion du parametre en int, utile au cas où l'utilisateur envoie une chaine de caractere dans le get
			$_GET['page'] = (int ) $_GET['page'];

			include_once "modele/produits/get_depart.php";
			$depart = get_depart($_GET['page'],$nbPages,$max_par_page);

			if(!isset($_POST['search']) || empty($_POST['search']))
				{
					include_once("modele/produits/get_produits.php");
					$produits = get_produits($depart,$max_par_page);
				}
			else
			{
				$search = $_POST['search'];
				include_once("modele/produits/search_produits.php");
				$produits = search_produits($search,$depart,$max_par_page);
			}

			//pour les liens de pagination
			if(isset($_GET['page']))
			{
				if($_GET['page']!=1)
					$precedent = $_GET['page']-1;
				else 
					$precedent = 1;

				if($_GET['page']!=$nbPages)
					$suivant = $_GET['page'] +1;
				else
					$suivant = $nbPages;
			}
			else
			{
				$precedent = 1;
				$suivant = 2;
			}
		}
		else
		{
			if(!isset($_POST['search']) || empty($_POST['search']))
				{
					include_once("modele/produits/get_produits.php");
					$produits = get_produits(0,$max_par_page);
				}
			else
			{
				$search = $_POST['search'];
				include_once("modele/produits/search_produits.php");
				$produits = search_produits($search,0,$max_par_page);
			}
	
		}



foreach ($produits as $key => $produit) {
		$produits[$key]['LIB'] = htmlspecialchars($produit['LIB']);
		$produits[$key]['PU'] = htmlspecialchars($produit['PU']);
		$produits[$key]['INFOS'] = (substr($produit['INFOS'],0,30).'....');
	}


	include_once("vue/produits/index.php");

}
else
{
	include_once("modele/produits/get_details_produit.php");
	$details = get_details_produit($_GET['id']);
	
	include_once("vue/produits/detailsProduit.php");
}
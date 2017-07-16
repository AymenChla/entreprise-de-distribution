
<?php 

if(isset($_GET['statut']) == "supprimer")	
{
	if (isset($_GET['id'])){
		include_once("admin/modele/ajout/supprimer_produit.php");
		supprimer_produit($_GET['id']);
		header("location:?session=admin&p=produits");
	}
}
if (isset($_GET['id'])){
	include_once("modele/produits/get_details_produit.php");
	$produits = get_details_produit($_GET['id']);
}
else{
	if(isset($_POST['submit']))
	{
		extract($_POST);
		include_once("admin/modele/ajout/ajout_produit.php");
		ajout_produit($lib , $pu, $infos, $img);
	}
}

include_once("admin/vue/ajout/index.php");
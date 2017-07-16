<?php 

	function get_nombre_produits()
	{
		global $bd;
		$sql = "SELECT count(*) as nbProduits from produit";
		$req=$bd->query($sql);
		$nb = 0;
		if($nbProduits = $req->fetch())
			$nb = $nbProduits['nbProduits'];

		$req->closeCursor();
		return $nb;
	}
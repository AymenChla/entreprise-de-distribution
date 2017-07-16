<?php 

	function get_liste_produits($liste)
	{
		global $bd;
		if(!empty($liste))
		{
			$chaine = "";
			for($i = 0 ; $i < count($liste) ; $i++)
			{
				if($chaine!="") $chaine .= " OR ";
				$chaine .= " NOP=?";
			}


			$sql = 'SELECT * FROM produit WHERE '.$chaine;
			$req = $bd->prepare($sql);
			$req->execute($liste);
			$produits = $req->fetchAll();

			return $produits;
		}
		return null;
	}
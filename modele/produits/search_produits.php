<?php 
	
	function search_produits($search,$offset, $limit)
	{
		global $bd;
		$prix = $search;
		$offset = (int) $offset;
		$limit = (int) $limit;

		$sql = "SELECT * FROM produit WHERE LIB LIKE :search OR PU = :prix OR INFOS LIKE :search LIMIT ".$offset.", ".$limit;
		$req = $bd->prepare($sql);
		$req->execute(array('search' => '%'.$search.'%',
							'prix' => $prix));
		$produits = $req->fetchAll();

		return $produits;
	}
<?php 
	function get_produits($offset, $limit)
	{
		global $bd;
		$offset = (int) $offset;
		$limit = (int) $limit;

		$sql = 'SELECT * FROM produit LIMIT :offset, :limit';
		$req = $bd->prepare($sql);
		$req->bindParam(':offset', $offset, PDO::PARAM_INT);
		$req->bindParam(':limit', $limit, PDO::PARAM_INT);
		$req->execute();
		$produits = $req->fetchAll();

		return $produits;
	}
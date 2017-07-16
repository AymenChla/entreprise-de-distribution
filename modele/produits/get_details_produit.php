<?php 

	function get_details_produit($id)
	{
		global $bd;
		$sql = "SELECT * FROM produit WHERE NOP = ".$id;
		$req = $bd->query($sql);

		if($details = $req->fetch())	
			return $details;

		return NULL;
	}
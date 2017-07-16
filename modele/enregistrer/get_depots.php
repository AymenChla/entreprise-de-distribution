<?php 
	
	function get_depots()
	{
		global $bd;
		$sql = "SELECT * FROM depot";
		try{
			$req = $bd->query($sql);
		}catch(Exception $e){
			die("erreur query: ".$e->getMessage());
		}
		$depots = $req->fetchAll();
		$req->closeCursor();
		return $depots;
	}
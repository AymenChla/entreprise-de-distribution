<?php 
	function get_clients()
	{
		global $bd;
		$sql = "SELECT * FROM client";
		$req = $bd->query($sql);
		$clients = $req->fetchAll();
		return $clients;
	}
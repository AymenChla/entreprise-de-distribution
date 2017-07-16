<?php 

	function verifierPassword($password)
	{
		global $bd;
		$password = sha1($password);
		$sql = 'SELECT PASSWORD FROM client WHERE NOCLI=:id';
		$req = $bd->prepare($sql);
		$req->execute(array("id" => $_SESSION['user']['nocli']));
		if($client = $req->fetch())
		{
			if($client['PASSWORD'] == $password)
				return true;
			else
				return false;
		}
	}
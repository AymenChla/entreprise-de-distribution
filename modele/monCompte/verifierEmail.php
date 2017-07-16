<?php 
	//verifier si l'email n'existe pas déjà chez un autre client
	function verifierEmail($email)
	{
		global $bd;
		$sql = 'SELECT EMAIL FROM client WHERE EMAIL = :email';
		$req = $bd->prepare($sql);
		$req->execute(array("email" => $email  ));
		if($client = $req->fetch())
			return false;
		else
			return true;
	}
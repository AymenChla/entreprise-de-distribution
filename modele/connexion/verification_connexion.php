<?php 
	function verification_connexion($email , $password)
	{
		global $bd;
		$password = sha1($password);
		$sql = 'SELECT NOCLI FROM client WHERE EMAIL = :email AND PASSWORD = :password';
		$req = $bd->prepare($sql);
		$req->execute(array(
						"email" => $email,
						"password" => $password));
		if($client = $req->fetch())
		{
			return $client['NOCLI'];
		}
		else return NULL;
	}
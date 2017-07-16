<?php

	function verification_connexion($email , $password)
	{
		global $bd;
		//$password = sha1($password);
		$sql = 'SELECT NOADMIN FROM admin WHERE EMAIL = :email AND PASSWORD = :password';
		$req = $bd->prepare($sql);
		$req->execute(array(
						"email" => $email,
						"password" => $password));
		if($client = $req->fetch())
		{
			return $client['NOADMIN'];
		}
		else return NULL;
	}
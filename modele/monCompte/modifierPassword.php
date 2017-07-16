<?php 
	function modifierPassword($password)
	{
		global $bd;
		$password = sha1($password);
		$sql = "UPDATE client SET PASSWORD=:password WHERE NOCLI=:id";
		$req = $bd->prepare($sql);
		$req->execute(array('password' => $password, 'id' => $_SESSION['user']['nocli']));
		$req->closeCursor();
	}
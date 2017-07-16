<?php 
	
	function modifierEmail($email)
	{
		global $bd;
		$sql = "UPDATE client SET EMAIL=:email WHERE NOCLI=:id";
		$req = $bd->prepare($sql);
		$req->execute(array('email' => $email,
							'id' => $_SESSION['user']['nocli'])
					  );
	}
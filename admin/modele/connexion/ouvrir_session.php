<?php 
	function ouvrir_session($id)
	{
		global $bd;
		$sql = "SELECT * FROM admin WHERE NOADMIN = :id";
		$req = $bd->prepare($sql);
		$req->execute(array("id"=>$id));
		if($admin = $req->fetch())
		{
			$_SESSION['admin'] =  array();
			$_SESSION['admin']['noadmin'] =  $admin['NOADMIN'];
			$_SESSION['admin']['nom']  = $admin['NOM'];
			$_SESSION['admin']['prenom'] = $admin['PRENOM'];
			$_SESSION['admin']['email'] = $admin['EMAIL'];
		}
		
	}
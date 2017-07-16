<?php 
function ajout_client()
{
	global $bd,$password,$prenom,$nom,$email,$date_naissance,$sexe;
	$sql = 'INSERT INTO client(SEXE,PRENOM,NOM,DATE_NAISSANCE,EMAIL,PASSWORD) 
			VALUES(:sexe, :prenom, :nom, :date_naissance, :email, :password)';
	$req = $bd->prepare($sql);
	$req->execute(array(
						 'sexe' => $sexe,
						 'prenom' => $prenom,
						 'nom' => $nom,
				         'email' => $email,
				         'date_naissance' => $date_naissance,
				         'password' => $password));
	$req->closeCursor(); 		
}
	
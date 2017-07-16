<?php 

	function enregistrer_commande($nof)
	{

		global $bd;
	  	$sql = 'INSERT into commande (NOCOM,DAC,NOF,NOCLI) VALUES(DEFAULT,DEFAULT,:nof,:nocli) ';
	  	$req= $bd->prepare($sql);
	  	$req->execute(array(
	  						"nof"=>$nof,
	  						"nocli"=>$_SESSION['user']['nocli']));
	  	$req->closeCursor();

	  	$sql='select NOCOM from commande order by DAC DESC limit 0,1';
	  	$reponse = $bd->query($sql);
	  	$donnee = $reponse->fetch();
	  	return $num = $donnee['NOCOM'];
	}

	
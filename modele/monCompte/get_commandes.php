<?php 
	function get_commandes($limit)
	{
		
		global $bd;
		
	  	$sql = "SELECT * FROM lignec, commande, produit where lignec.NOCOM = commande.NOCOM AND commande.NOCLI = :nocli AND produit.NOP = lignec.NOP ORDER BY commande.DAC DESC LIMIT 0,$limit";
	  	$req= $bd->prepare($sql);
	  	$req->execute(array("nocli" => $_SESSION['user']['nocli']));
	  	$commandes = $req->fetchAll();

	  	$req->closeCursor();

	  	if($commandes!=NULL)
	  		return $commandes;
	  	return NULL;
			
	}
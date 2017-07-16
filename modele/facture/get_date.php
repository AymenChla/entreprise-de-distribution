<?php 

	function get_date($nof)
	{	
			global $bd;
			
		  	$sql = "SELECT DAF FROM facture WHERE NOF = :nof";
		  	$req= $bd->prepare($sql);
		  	$req->execute(array("nof" => $nof));
		  	$date = $req->fetch();

		  	$req->closeCursor();

		  if($date!=NULL)
		  	return $date['DAF'];
		  return NULL;
	}
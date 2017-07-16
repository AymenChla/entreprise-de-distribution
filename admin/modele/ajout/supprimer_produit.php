<?php 
	function supprimer_produit($id)
	{
		global $bd;

		$sql = 'delete from produit 
				where NOP=:id';
		$req = $bd->prepare($sql);
		$req->execute(array('id'=>$id
					         ));
		$req->closeCursor();

	}
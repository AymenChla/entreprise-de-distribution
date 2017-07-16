<?php 
	function ajout_produit($lib , $pu, $infos, $img)
	{
		global $bd;

		$sql = 'INSERT INTO produit 
				VALUES(DEFAULT, :lib, :pu, DEFAULT, :infos, :img)';
		$req = $bd->prepare($sql);
		$req->execute(array('lib' => $lib,
							'pu' => $pu,
							'infos' => $infos,
							'img' => $img
					         ));
		$req->closeCursor();
	}

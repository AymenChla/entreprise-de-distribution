<?php 

	function htc($produits)
	{
		$somme = 0.;
		for($i = 0 ; $i < count($produits) ; $i++)
		{

			$somme += sous_total($produits[$i]);
		}
		return $somme;
	}
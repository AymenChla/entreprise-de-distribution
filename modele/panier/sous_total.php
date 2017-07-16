<?php 
	function sous_total($produit)
	{

		$sous_total = 0.;
		$indice = array_search($produit['NOP'], $_SESSION['panier']['nop']);
		if($indice !== false)
		{	
			$sous_total = $produit['PU']*$_SESSION['panier']['qtc'][$indice];
		}
		return $sous_total;
	}
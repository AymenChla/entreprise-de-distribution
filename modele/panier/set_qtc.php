<?php 
	function set_qtc($nop,$qtc)
	{
		$indice = array_search($nop,$_SESSION['panier']['nop']);
		if($indice !== false)
			$_SESSION['panier']['qtc'][$indice] = $qtc;
		else
			return null;
	}
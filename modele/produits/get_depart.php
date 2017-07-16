<?php 

	function get_depart($page,$nbPages,$max_par_page)
	{
		//calul du départ c.à.d la ième entrée qui correspond au premier produits de la page demander
		if($page <= 0) $depart = 0;
		else if($page > $nbPages) $depart = ($nbPage-1)*$max_par_page;
		else $depart = ($page-1)*$max_par_page;

		return $depart;
	}
<?php 
	
	function get_nombre_pages($nbProduits, $max_par_page)
	{
		    //Calcul du nombre de pages, chaque page contient un nombre définie de produits
			if($nbProduits < $max_par_page)	$nb_pages = 1;  //si le nombre de messages est inférieur au max de produits possible par page dans ce cas on aura une seule page
			else
			{
				//si le nombre de produits est divisible par le max 
				if($nbProduits%$max_par_page == 0)
					$nb_pages = (int) ( $nbProduits/$max_par_page ) ; //le (int) Pour obtenir la partie entière de la division

				//sinon on ajoute le 1 pour cree une autre page qui contient les derniers produits
				else
					$nb_pages = (int) ( $nbProduits/$max_par_page + 1 );
			}

		return $nb_pages;
	}
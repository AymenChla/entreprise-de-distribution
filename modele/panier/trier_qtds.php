<?php 
	function trier_qtds($qtds,$produits)
	{
		$qtds_trier = array();
		if(!empty($qtds) AND !empty($produits))
		{
			foreach($produits as $key => $produit)
			{
				for($i = 0 ; $i < count($qtds) ; $i++)
				{
					if($produit['NOP'] == $qtds[$i]['NOP'])
					{
						array_push($qtds_trier,$qtds[$i]);
						break;
					}
				}
			}
			return $qtds_trier;
		}
		return null;
	}
<?php
	function get_qtc($nop)
	{
		 $ind_qtc = array_search($nop, $_SESSION['panier']['nop']);
		if($ind_qtc !== false )
			return $_SESSION['panier']['qtc'][$ind_qtc];
		else
			return 0;
	}

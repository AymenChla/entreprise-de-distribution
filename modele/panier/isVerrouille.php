<?php

	function isVerrouille(){
	   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
	   return true;
	   else
	   return false;
	}

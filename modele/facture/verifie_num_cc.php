<?php
function verifie_num_cc($num_cc,$myType) {
	
	 	/* Renvoie le type de la carte si son numéro est correct */
	 	$faux = false;
	 	$type_carte = "";
	 	$regex_cartes = array(
					 	"/^4\d{12}(\d\d\d){0,1}$/" => "visa",
					 	"/^5[12345]\d{14}$/" => "masterCard",
					 	"/^3[47]\d{13}$/" => "paypal"
					 	);
	 	foreach ($regex_cartes as $regex => $type) {
		 	if (preg_match($regex, $num_cc)) {
		 	$type_carte = $type;
		 	break;
		 	}
	 	}
	 	if (!$type_carte OR $type_carte != $myType) 
	 		return $faux;

	 	return $type_carte;
	 }
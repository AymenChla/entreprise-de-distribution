<?php
function creationPanier(){
	
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      //$_SESSION	['panier']['pu'] = array();
      $_SESSION['panier']['nop'] = array();//nop=numproduit
      $_SESSION['panier']['qtc'] = array();//quanticommand
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}
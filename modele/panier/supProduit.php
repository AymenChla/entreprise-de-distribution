<?php
function supProduit($nop){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //gestion d'un panier temporaire
      $tmp=array();
      $tmp['nop'] = array();
      $tmp['qtc'] = array();
      //$tmp['pu] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i = 0; $i < count($_SESSION['panier']['nop']); $i++)
      {
         if ($_SESSION['panier']['nop'][$i] !== $nop)
         {
            array_push( $tmp['nop'],$_SESSION['panier']['nop'][$i]);
            array_push( $tmp['qtc'],$_SESSION['panier']['qtc'][$i]);
            //array_push( $tmp['pu'],$_SESSION['panier']['pu'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu .";
}


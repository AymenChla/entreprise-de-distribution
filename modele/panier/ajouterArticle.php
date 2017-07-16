<?php
function ajouterArticle($nop,$qtc){

   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      // ajoute seulement la quantité Si le produit existe déjà 
      $positionProduit = array_search($nop,  $_SESSION['panier']['nop']);

      if ($positionProduit !== false)
      {
         $_SESSION['panier']['qtc'][$positionProduit] += $qtc ;
      }
      else
      {
         //Sinon ajoute le produit
         array_push( $_SESSION['panier']['nop'],$nop);
         array_push( $_SESSION['panier']['qtc'],$qtc);

      }
   }
   else
   echo "Un problème est survenu .";

}

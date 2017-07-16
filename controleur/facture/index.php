<?php 
	
	

	$notification='';
	if(isset($_POST['submit']) && isset($_POST['myType']))
	{
		extract($_POST);
		
		/* Supprime tous les caractères non numériques du numéro de carte */
		$num = preg_replace('/[^0-9]/', "", $code);
		$tailleKey = strlen($key);
		include_once("modele/facture/verifie_num_cc.php");
		$t = verifie_num_cc($code,$myType);
		if ($t and is_numeric($key) and $tailleKey = 3) {
				

					
					
					include_once("modele/facture/enregistrer_facture.php");
					include_once("modele/facture/enregistrer_lignef.php");
					//include_once("vue/panier/facture_ed.php");

					include_once("modele/panier/sous_total.php");
					include_once("modele/produits/get_liste_produits.php");

					$produits = get_liste_produits($_SESSION['panier']['nop']);

					//calcule total htc
					include_once("modele/panier/htc.php");
					$htc = htc($produits);
					
					//calcule total ttc
					include_once("modele/panier/ttc.php");
					$ttc = ttc($htc);

					$nof=enregistrer_facture($ttc);

					//enregistrer la commande
					include_once("modele/facture/enregistrer_commande.php");
					$nocom = enregistrer_commande($nof);

					//enregistrer dans ligne de facture
					include_once("modele/panier/get_qtc.php");
					//enregistrer dans ligne commande
					include_once("modele/facture/enregistrer_lignec.php");
					foreach($produits as $cle=>$v)
					{
						enregistrer_lignef($v['NOP'],$nof,$v['PU']);

						enregistrer_lignec($nocom,$v['NOP']);
					}

					

					//generation du fichier pdf (facture)
					include_once("modele/panier/get_qtc.php");
					include_once("modele/panier/sous_total.php");
					include_once("modele/facture/get_date.php");
					$date = get_date($nof);
					include_once("vue/facture/html2pdf/facture_ED.php");


		} else {

		$notification =  '<div class="alert alert-danger">
						  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						  <span class="sr-only">AVIS :</span>
						  	<strong>'.$code.' est incorrect..</strong>
						  </div>
						</div>';
		include 'vue/facture/paiement.php';
		}
	}
	else
	{
		include 'vue/facture/paiement.php';
	}
	

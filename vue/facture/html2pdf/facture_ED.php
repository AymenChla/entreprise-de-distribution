<?php
	
    	$content = '
		<!DOCTYPE html>
		<html>
		<head>
		<title>Facture</title>
		<meta charset="utf-8"/>
		<style type="text/css">


		body {
		  font-family:Arial;
		}

		#logo {
		  float:left;
		  margin:0;
		}

		#page {
		  width:900px;
		  margin:auto;
		  padding:20px;
		  
		  background-position: 120px 120px;

		}


		#address {
		  height:181px;
		  margin-left:290px; 
		}



		table {
		 width:100%;
		text-align:center;
		}

		td {
		padding:5px;
		width:100px;
		}

		tr.odd {
		  background:rgb(78,156,96);
		}
		#titreED {

		text-align:center;

		color:rgb(220,0,0);
		font-family:Arial;
		font-size:150%;
		text-align: left;
		}
		#facture{

		    margin-left:100px; 

		     color:rgb(78,156,96);
		    font-size:170%;

		}
		#codebarre{
			float: right;
		}

		</style>
		</head>
		<body>
		<div id="page">
			  <div id="logo">
			  <img src="vue/images/ed.png" width="70" > 

			    <br><br>
			    <p align="right"> <strong>Num facture: </strong></p>
			   </div>
			  
			   <div id="address">
			    <p id="titreED"> <strong>Entreprise de Distribution </strong> (R.A.H) 
			    <br /><br><br>
			    </p>
			    
			    <p id="facture"><strong>FACTURE</strong></p>

			    </div> 

			    <div id="content">
			    <p>
			      <strong>Détails du client</strong><br /><br>
			      Email: <br />
			      Nom: <br />
			      Prenom: <br />
			      Adresse: <br>

				</p>
				
			    <hr>
			    <table>
			      <tr>
			        <td><strong>Libellé</strong></td>
			        <td><strong>Quantité</strong></td>
			        <td><strong>Prix</strong></td>
			        <td><strong>Sous total</strong></td>
			      </tr>
			      
				  <tr>
				    <td></td>
				    <td></td>
				    <td><strong>Total(HTC) en Dhs</strong></td>
				    <td><strong>'.$htc.'</strong></td>
				  </tr>
				  <tr>
				    <td></td>
				    <td></td>
				    <td><strong>Taux de T.V.A</strong></td>
				    <td><strong>20 %</strong></td>
				  </tr>
				  <tr>
				    <td></td>
				    <td></td>
				    <td><strong>Total(TTC) en Dhs</strong></td>
				    <td><strong>'.$ttc.'</strong></td>
				  </tr>

			    </table>
			    <hr>
			    <p>
			      &nbsp; &nbsp; Merci de nous avoir fait confiance!  Veuillez garder une copie de cette facture jusqu\'a obtention de votre commande  <br /><br/>
			    </p>
			    <br><br><br>

			    <hr>


			    <p>
			      <small>&nbsp; &nbsp; &nbsp;<br />Pour tout renseignement, n\'hesitez pas à contacter l\'un des responsables 
			      <br>(Rymebenjy@gmail.com ou Aymenchla@gmail.com ou Haitamdadsi@gmail.com)
			      <br /><br />
			      
			      </small>
				   <div id="codebarre">
			      <img src="vue/images/codeb.png" width="90" ><br>
			      <strong>'.$date.'</strong></div>
				 <h5><i>entreprise de distribution R.A.H &copy; 2016</i></h5><br>
				 
				
			    </p>
			    
			  </div><!--end content-->
		</div><!--end page-->
		</body>

		</html>

				';

    	include_once('vue/facture/html2pdf/html2pdf.class.php');
    	$html2pdf = new HTML2PDF('P','A4','fr');
    	$html2pdf->WriteHTML($content);
		$html2pdf->Output('facture_ED.pdf');
         ?>
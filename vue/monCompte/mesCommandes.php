<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue sur ED</title>	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vue/bootstrap/css/bootstrap.css">
	<script src="vue/js/jquery.min.js"></script>
	<script src="vue/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<?php include_once "vue/includes/header.php"; ?>
	<div class="container">
		<article class="row">
			
			<!--navigation du compte-->
			<?php include_once("vue/includes/navigationMonCompte.php"); ?>

			<div class="col-md-5">
				<h5><strong>Mes commandes</strong></h5>
				<hr>
				
				<!--si pas de commandes-->
				<?php 
					if(count($commandes) == 0)
					{
						echo '<p class="text-center">Aucune commande<p>';
					}
					else
					{
						?>
						<table class='table table-striped'>
						<th>Produits commandé</th>
						<th>Quantité</th>
						<th>Date de commande</th>
						<th>Délai de livraison</th>
						<?php 
						foreach ($commandes as $key => $cmd) {
									$d = substr($cmd['DAC'],0,10);
									echo '<tr>';
										echo "<td><a href='?session=produits&statut=detail&id=".$cmd['NOP']."'>".$cmd['LIB']."</a></td>";
										echo "<td>".$cmd['QTC']."</td>";
										echo "<td>".$d."</td>";
										echo "<td>".$cmd['DEL']."</td>";
									echo '</tr>';
							
						}
						?>
						</table>

					<?php
					}

				?>
				
			</div>
			<?php include_once "vue/includes/sidebar.php"; ?>
		</article>	
	</div>
	<?php include_once "vue/includes/footer.php";?>
	
</body>
</html>

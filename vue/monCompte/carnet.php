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
				<h5><strong>Carnet d'adresse</strong></h5>
				<hr>

				<!--carnet d'adresse-->
				<div class="panel panel-default">
				  <div class="panel-heading">Votre adresse de livraison</div>
				  <div class="panel-body">
				  	<p><?php echo $_SESSION['user']['adresse']; ?></p>
				  	<?php 
				  		//si la source est la page de validation du panier
				  		if($_GET[statut]=='valider')
				  		{
				  			echo '<div class="text-right"><a href="?session=monCompte&statut=modifierCarnet&src=panier"><i class="glyphicon glyphicon-pencil"></i> Modifier</a></div>';
				  		}
						else
						{
							echo '<div class="text-right"><a href="?session=monCompte&statut=modifierCarnet"><i class="glyphicon glyphicon-pencil"></i> Modifier</a></div>';
						}
				  	?>
				    
				  </div>
				</div>
				

				
			</div>
			<?php include_once "vue/includes/sidebar.php"; ?>
		</article>	
	</div>
	<?php include_once "vue/includes/footer.php";?>
	
</body>
</html>

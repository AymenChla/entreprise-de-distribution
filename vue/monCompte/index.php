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
				<h5><strong>Paramètre du compte</strong></h5>
				<hr>
				<!--information de contact-->
				<div class="panel panel-default">
				  <div class="panel-heading">Information de contact</div>
				  <div class="panel-body">
				    <p><?php echo $_SESSION['user']['nom']." ".$_SESSION['user']['prenom']; ?></p>
				    <p><?php echo $_SESSION['user']['email']; ?>-<a href="?session=monCompte&statut=modifierEmail">Changer email</a></p>
				    <p><a href="?session=monCompte&statut=modifierPassword">Changer le mot de passe</a></p>
				    <div class="text-right"><a href="?session=monCompte&statut=informations"><i class="glyphicon glyphicon-pencil"></i> Modifier</a></div>
				  </div>
				</div>
				
				<!--carnet d'adresse-->
				<div class="panel panel-default">
				  <div class="panel-heading">Votre adresse de livraison</div>
				  <div class="panel-body">
				  	<p><?php echo $_SESSION['user']['adresse']; ?></p>
				    <div class="text-right"><a href="?session=monCompte&statut=modifierCarnet"><i class="glyphicon glyphicon-pencil"></i> Modifier</a></div>
				  </div>
				</div>

			</div>
			<?php include_once "vue/includes/sidebar.php"; ?>
		</article>	
	</div>
	<?php include_once "vue/includes/footer.php";?>
	
</body>
</html>

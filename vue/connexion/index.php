<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vue/bootstrap/css/bootstrap.css">
	<script src="vue/js/jquery.min.js"></script>
	<script src="vue/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	
	
	
	<div class="container">
		<div class="row">
			<?php 
					//email ou mot de passe incorrect
					if(isset($error))
					{
						?>
							<div id="erreur" class="alert alert-danger col-md-4 col-md-offset-4 ">
								<span class="glyphicon glyphicon-remove"></span>
								<?php echo $error; ?> 
							</div>
						<?php
					}
			?>

			<form class="form-horizontal panel-group col-md-4 col-md-offset-4" role="form" method="post" action=
				<?php 
					if(isset($_GET['target']))
						echo "?session=connexion&statut=1&target=paiement";
					else
						echo "?session=connexion&statut=1";
				?>
				>
				<div  class="panel panel-default">
					<div class="panel-heading">Connectez-vous</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="email" class="control-label col-sm-3">Email</label>
							<div class="col-sm-8">
								<input type="text" name="email" id="email" class="form-control" placeholder="saisir email">
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="control-label col-sm-3">Password</label>
							<div class="col-sm-8">
								<input type="password" name="password" id="password" class="form-control" placeholder="saisir password">
							</div>
						</div>
						<div class="form-group">
							<label for="sumbit" class="control-label col-sm-3"></label>
							<div class="col-sm-8 ">
								<input type="submit" class="btn btn-success btn-block" value="se connecter">
							</div>
						</div>

						<a href="?session=enregistrer">Mots de passe oublier ?</a><br>
						<a href="?session=enregistrer">Vous n'avez pas de compte ?</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>
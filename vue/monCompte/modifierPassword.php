<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue sur ED</title>	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vue/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="vue/bootstrap/css/bootstrapValidator.min.css">
</head>
<body>
	<?php include_once "vue/includes/header.php"; ?>
	<div class="container">
		<article class="row">
			
			

			<!--navigation du compte-->
			<?php include_once("vue/includes/navigationMonCompte.php"); ?>

			<div class="col-md-5">
				<h5><strong>Modifier le mot de passe</strong></h5>
				<hr>
				
				<!--Message d'erreur-->
				<?php 
					if(isset($error))
					{
						?>
							<div id="erreur" class="alert alert-danger  ">
								<span class="glyphicon glyphicon-remove"></span>
								<?php echo $error; ?> 
							</div>
						<?php
					
					}
					//si le mot de passe n'est pas encore modifier
					if(!isset($success))
					{
				?>

				<!--formulaire modification email-->
				<form class="form-horizontal panel-group" id="form" action="?session=monCompte&statut=modifierPassword" method="post" data-toggle ="validator" role="form">
					<div class="panel panel-default">
						
						<div class="panel-body">
						
							
							<div class="form-group">
								<label class="control-label col-md-5" for="password">Mot de passe actuel *</label>
								<div class="col-md-7">
									<input placeholder="password" class="form-control" type="password" name="password" id="password" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-5" for="nvPassword">Nouveau mot de passe</label>
								<div class="col-md-7">
									<input placeholder="Nouveau mot de passe" class="form-control" type="password" name="nvPassword" id="nvPassword" required>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-5" for="confirmation">Confirmer mot de passe</label>
								<div class="col-md-7">
									<input placeholder="Confirmer mot de passe" class="form-control" type="password" name="confirmation" id="confirmation" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-5"></label>
								<div class="col-md-6">
									<input class="btn btn-success" type="submit" name="submit" value="Enregistrer">
								</div>
							</div>
						</div>
					</div>
				</form>
				

				<?php  //si le mot de passe est changé 
					}
					else
					{
						?>
							<div id="erreur" class="alert alert-success  ">
								<span class="glyphicon glyphicon-check"></span>
								<?php echo $success; ?> 
							</div>
						<?php
					}	
				?>

			</div>
			<?php include_once "vue/includes/sidebar.php"; ?>
		</article>	
	</div>
	<?php include_once "vue/includes/footer.php";?>

	
	<script src="vue/js/jquery.min.js"></script>
	<script src="vue/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="vue/bootstrap/js/bootstrapValidator.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				$("#form").bootstrapValidator({

					feedbackIcons: {
						valid: "glyphicon glyphicon-ok",
						invalid: "glyphicon glyphicon-remove", 
						validating: "glyphicon glyphicon-refresh"
					}, 
					fields :{


						
						password :{
							validators :{
								notEmpty :{
									message :"mot de passe obligatoire"
								},
								stringLength :{
									min: 6,
									message :"mot de passe comporte au moins 6 caracteres"
								}
							}
						},

						nvPassword :{
							validators :{
								notEmpty :{
									message :"mot de passe obligatoire"
								},
								stringLength :{
									min: 6,
									message :"mot de passe comporte au moins 6 caracteres"
								},
								different :{
									field :"password",
									message :"mot de passe doit etre different du mot de passe actuel"
								}
							}
						},
						confirmation :{
							validators :{
								notEmpty :{
									message :"confirmation obligatoire"
								},
								identical :{
									field : "nvPassword",
									message :"confirmation erroné"
								}
							}
						}
					}
				});

			/*$('#form').on("success.form.bv", function (e) {
				e.preventDefault();
				$("#form").addClass("hidden");
				$("#confirmation-enregistrement").removeClass("hidden");
				$("#form").submit();
			});*/
		});
	</script>
	
</body>
</html>

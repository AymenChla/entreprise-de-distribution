<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue sur ED</title>	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vue/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="vue/bootstrap/css/bootstrapValidator.min.css">
	<script src="vue/js/jquery.min.js"></script>
	<script src="vue/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="vue/bootstrap/js/bootstrapValidator.min.js"></script>
</head>
<body>
	<?php include_once "vue/includes/header.php"; ?>
	<div class="container">
		<article class="row">
			
			<!--navigation du compte-->
			<?php include_once("vue/includes/navigationMonCompte.php"); ?>

			<div class="col-md-5">
				<h5><strong>Modifier l'E-mail</strong></h5>
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
					
					//si l'email n'est pas encore modifier
					if(!isset($success)) 
					{
				?>

				
				<!--formulaire modification email-->
				<form class="form-horizontal panel-group" id="form" action="?session=monCompte&statut=modifierEmail" method="post" data-toggle ="validator" role="form">
					<div class="panel panel-default">
						
						<div class="panel-body">
						
							
							<div class="form-group">
								<label class="control-label col-md-5">L'E-mail courant</label>
								<div class="col-md-7">
									<span class="form-control" readonly><?php echo $_SESSION['user']['email']; ?></span>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-5" for="email">Nouveau E-mail</label>
								<div class="col-md-7">
									<input placeholder="Nouveau email" class="form-control" type="email" name="email" id="email" required>
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
				
				<?php //modification réussi
					}
					else
					{
						?>
							<div id="success" class="alert alert-success">
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
	
	
	<script type="text/javascript">
		$(document).ready(function(){
				$("#form").bootstrapValidator({

					feedbackIcons: {
						valid: "glyphicon glyphicon-ok",
						invalid: "glyphicon glyphicon-remove", 
						validating: "glyphicon glyphicon-refresh"
					}, 

					fields :{

					
						email :{
							validators :{
								notEmpty :{
									message :"adresse email obligatoire"
								},
								emailAddress :{
									message :"entrez une adresse valide"
								},
								stringLength :{
									min :6,
									max :35,
									message :"l'adresse doit etre entre 6 et 35 caracteres"
								}
							}
						}
					}
				});

			/*$('#form').on("success.form.bv", function (e) {
				e.preventDefault();	
				var $this = $(this);
				$.ajax({
					url: $this.attr('action'),
					type: $this.attr('method'),
					data: $this.serialize(),
					success: function(html)
					{
						alert(html);
					}
				});			
				$("#form").addClass("hidden");
				$("#confirmation-enregistrement").removeClass("hidden");
			});*/
		});

	</script>
</body>
</html>

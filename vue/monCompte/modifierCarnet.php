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
				<h5><strong>Modifier l'adresse<strong></h5>
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

				<!--informations personnelles-->
				<!--formulaire de modification-->

				<form class="form-horizontal panel-group" id="form" 

					<?php 
						if (isset($_GET['src']))
							echo 'action="?session=monCompte&statut=modifierCarnet&src=panier" method="post" data-toggle ="validator" role="form">';
						else{
							echo 'action="?session=monCompte&statut=modifierCarnet" method="post" data-toggle ="validator" role="form">';
						}
					?>

				
					<div class="panel panel-default">
						
						<div class="panel-body">
						
							<div class="form-group">
								<label class="control-label col-md-5" for="prenom">Prénom * </label>
								<div class="col-md-6">
									<input placeholder="Votre prénom" class="form-control" type="text" name="prenom" id="prenom" value="<?php echo $_SESSION['user']['prenom']; ?>" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-5" for="nom">Nom *</label>
								<div class="col-md-6">
									<input placeholder="Votre nom" class="form-control" type="text" name="nom" id="nom" value="<?php echo $_SESSION['user']['nom']; ?>" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-5" for="tel">Télephone *</label>
								<div class="col-md-6">
									<input placeholder="Votre tel" class="form-control" type="tel" name="tel" id="tel" value="<?php echo $_SESSION['user']['tel']; ?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-5" for="adresse">Adresse *</label>
								<div class="col-md-7">
									<input placeholder="Votre adresse" class="form-control" type="text" name="adresse" id="adresse" value="<?php echo $_SESSION['user']['adresse'];?>" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-5" for="ville">Ville *</label>
								<div class="col-md-7">
									<select class="form-control" id="ville" name="ville">
										<option value="" <?php if($_SESSION['user']['ville'] == '') echo "selected"; ?>>Sélectionner votre ville</option>
										<option value="casablanca" <?php if($_SESSION['user']['ville'] == 'casablanca') echo "selected"; ?> >
											Casablanca
										</option>
										<option value="rabat" <?php if($_SESSION['user']['ville'] == 'rabat') echo "selected"; ?> > 
											Rabat
										</option>
										<option value="marrakesh" <?php if($_SESSION['user']['ville'] == 'marrakesh') echo "selected"; ?>>
											Marrakesh
										</option>
										<option value="eljedida" <?php if($_SESSION['user']['ville'] == 'eljedida') echo "selected"; ?>>
											El jedida
										</option>
										<option value="agadir" <?php if($_SESSION['user']['ville'] == 'agadir') echo "selected"; ?>>
											Agadir
										</option>
									</select>
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

							prenom :{
								validators :{
									notEmpty :{
										message :"nom obligatoire"
									},
									stringLength :{
									min :2,
									max :100,
									message :"le nom doit etre entre 6 et 100 caracteres"
									}
								}
							},

							nom :{
								validators :{
									notEmpty :{
										message :"nom obligatoire"
									},
									stringLength :{
									min :2,
									max :100,
									message :"le nom doit etre entre 6 et 100 caracteres"
									}
								}
							},

							tel :{
								validators :{
									notEmpty :{
										message :"tel obligatoire"
									},
									regexp :{
										regexp: /^[0-9]+$/,
										message: "numero non valide"
									}
								}
							},

							adresse :{
								validators :{
									notEmpty :{
										message :"adresse obligatoire"
									},
									stringLength :{
										min :10,
										max :255,
										message: "l'adresse doit etre compri entre 10 et 255 caracteres"
									}

								}
							},

							ville :{
								validators :{
									notEmpty :{
										message :"choisissez votre ville"
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

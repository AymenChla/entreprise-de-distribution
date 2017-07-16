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
				<h5><strong>Modifier le compte<strong></h5>
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
					
					//si aucune modifcation
					if(!isset($success)) 
					{
				?>

				<!--informations personnelles-->
				<!--formulaire de modification-->

				<form class="form-horizontal panel-group" id="form" action="?session=monCompte&statut=informations" method="post" data-toggle ="validator" role="form">
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
								<label class="control-label col-md-5" for="sexe">Sexe *</label>
								<div class="col-md-6">
									<select class="form-control" id="sexe" name="sexe">
										<option value="homme" <?php if($_SESSION['user']['sexe'] == 1) echo "selected"; ?> >Homme</option>
										<option value="femme" <?php if($_SESSION['user']['sexe'] == 0) echo "selected"; ?>>Femme</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-5" for="emailCourant">L'E-mail courant</label>
								<div class="col-md-7">
									<input type="email" class="form-control" id="emailCourant"  value ="<?php echo $_SESSION['user']['email']; ?>" readonly >
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-5" for="email">Nouveau E-mail</label>
								<div class="col-md-7">
									<input placeholder="Nouveau email" class="form-control" type="email" name="email" id="email" >
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-5" for="date_naissance">Date de naissance *</label>
								<div class="col-md-6">
									<input placeholder="d/m/yyyy" class="form-control" type="date" name="date_naissance" id="date_naissance" value="<?php echo $_SESSION['user']['date_naissance']; ?>" required>
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
			$('#form').bootstrapValidator({

								feedbackIcons: {
										valid: "glyphicon glyphicon-ok",
										invalid: "glyphicon glyphicon-remove", 
										validating: "glyphicon glyphicon-refresh"
									}, 

									fields :{

										prenom :{
											validators :{
												notEmpty :{
													message :"Prénom obligatoire"
												},
												stringLength :{
													min: 2,
													max: 100,
													message: "Prénom doit etre entre 2 et 100 caractères"
												}
											}
										},

										nom :{
											validators :{
												notEmpty :{
													message :"nom obligatoire"
												},
												stringLength :{
													min: 2,
													max: 100,
													message: "Prénom doit etre entre 2 et 100 caractères"
												}
											}
										},

										sexe :{
											validators :{
												notEmpty :{
													message :"Veuillez choisir votre sexe"
												}
											}
										},

										email :{
											validators :{

												emailAddress :{
													message :"entrez une adresse valide"
												},
												
												stringLength :{
													min :6,
													max :35,
													message :"l'adresse doit etre entre 6 et 35 caracteres"
												}
											}
										},

										date_naissance :{
											validators :{
												notEmpty :{
													message :"Sélectionner votre date naissance"
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

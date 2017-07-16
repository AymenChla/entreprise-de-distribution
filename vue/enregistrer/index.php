<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue sur ED</title>	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vue/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="vue/bootstrap/css/bootstrapValidator.min.css">
</head>
<body>

	<!--navbar header-->
	<?php include_once "vue/includes/header.php"; ?>

	<div class="container">
		<article class="row">
			<div class="col-md-8">
				
				<!--Message d'erreur-->
				<?php 
					if(isset($erreur))
					{
						?>
							<div id="erreur" class="alert alert-danger  ">
								<span class="glyphicon glyphicon-remove"></span>
								<?php echo $erreur; ?> 
							</div>
						<?php
					}
					
				?>

				<!--Formulaire d'inscription-->
				<form class="form-horizontal panel-group" id="form" action="?session=enregistrer&statut=1" method="post" data-toggle ="validator" role="form">
					<div class="panel panel-default">
						<div class="panel-heading"><h1>Créer votre compte</h1></div>
						<div class="panel-body">
							
							<!--sexe-->
							<div class="form-group">
								<label class="control-label col-md-3" for="sexe">Sexe *</label>
								<div class="col-md-3">
									<select class="form-control" id="sexe" name="sexe">
										<option value="">Sélectionner</option>
										<option value="homme">Homme</option>
										<option value="femme">Femme</option>
									</select>
								</div>
							</div>

							<!--prénom-->
							<div class="form-group">
								<label class="control-label col-md-3" for="prenom">Prénom *</label>
								<div class="col-md-4">
									<input placeholder="Votre prénom" class="form-control" type="text" name="prenom" id="prenom" required>
								</div>
							</div>
							
							<!--nom-->
							<div class="form-group">
								<label class="control-label col-md-3" for="nom">Nom *</label>
								<div class="col-md-4">
									<input placeholder="Votre nom" class="form-control" type="text" name="nom" id="nom" required>
								</div>
							</div>
							
							<!--Date naissance-->
							<div class="form-group">
								<label class="control-label col-md-3" for="date_naissance">Date de naissance *</label>
								<div class="col-md-4">
									<input placeholder="d/m/yyyy" class="form-control" type="date" name="date_naissance" id="date_naissance" value="<?php echo $_SESSION['user']['date_naissance']; ?>" required>
								</div>
							</div>
							
							<!--email-->
							<div class="form-group">
								<label class="control-label col-md-3" for="email">Email *</label>
								<div class="col-md-4">
									<input placeholder="Votre Adresse mail" class="form-control" type="email" name="email" id="email" required>
								</div>
							</div>

							<!--password-->
							<div class="form-group">
								<label class="control-label col-md-3" for="password">Mot de passe *</label>
								<div class="col-md-4">
									<input placeholder="Entrez un mot de passe" class="form-control" type="password" name="password" id="password" required>
								</div>
							</div>

							<!--confirmation-->
							<div class="form-group">
								<label class="control-label col-md-3" for="confirmation">confirmation *</label>
								<div class="col-md-4">
									<input placeholder="Confirmer votre mot de passe" class="form-control" type="password" name="confirmation" id="confirmation"required>
								</div>
							</div>

							<!--submit-->
							<div class="form-group">
								<label class="col-md-3"></label>
								<div class="col-md-6">
									<input class="btn btn-success btn-block" id="submit" type="submit" value="s'enregistrer" name="submit">
								</div>
							</div>

						</div>
					</div>
				</form>

				<!--message succes d'inscription-->
				<div id="confirmation-enregistrement" class="alert alert-success hidden ">
					<span class="glyphicon glyphicon-star"></span> Thank you for registering
				</div>

			</div>
			<?php include_once "vue/includes/sidebar.php"; ?>
		</article>	
	</div>
	<div style="margin-top: 100px"></div>
	<footer class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<p class="navbar-text pull-left">All right reserved</p>
			<a href="#" class="btn btn-primary pull-right navbar-btn">share</a>
		</div>
	</footer>
	
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

						sexe :{
							validators :{
								notEmpty :{
									message :"choisissez votre sexe"
								}
							}

						},

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

						date_naissance:{
							validators :{
								notEmpty :{
									message: "Date naissance obligatoire"
								}

							}
						},

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
						},

						/*tel :{
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
						},

						cp :{
							validators :{
								regexp :{
									regexp :/^[0-9]+$/,
									message :"veuillez entrer un numero"
								}
							}
						},

						ca :{
							validators :{
								regexp :{
									regexp :/^[0-9]+$/,
									message :"veuillez entrer un numeo"
								}
							}
						},

						depot_p :{
							validators :{
								notEmpty :{
									message :"choisissez votre depot privillegié"
								}
							}

						},

						depot_s :{
							validators :{
								notEmpty :{
									message :"choisissez votre depot de secours"
								},
								different :{
									field: "depot_p",
									message :"depot doit etre different du privillegié"
								}
							}

						},*/
						password :{
							validators :{
								notEmpty :{
									message :"mot de passe obligatoire"
								},
								stringLength :{
									min: 6,
									message :"mot de passe comporte au moins 6 caracteres"
								},
								different :{
									field :"email",
									message :"mot de passe doit etre different de l'email"
								}
							}
						},

						confirmation :{
							validators :{
								notEmpty :{
									message :"confirmation obligatoire"
								},
								identical :{
									field : "password",
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

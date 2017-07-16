<!DOCTYPE html>
<html>
<head>
	<title>Contactez-nous</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vue/bootstrap/css/bootstrap.css">
	<script src="vue/js/jquery.min.js"></script>
	<script src="vue/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<?php include_once("vue/includes/header.php");?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="container-fluid article">
				    <form class="form-horizontal" method="post" target="">
				    	<fieldset>
				        	<legend>Contactez-nous</legend>
				            	<div class="form-group">

					            	<label for="nom" class="col-md-2 control-label">Nom</label>
				                    <div class="col-md-6">
				                        <input class="form-control" type="text" placeholder="nom" name="nom" id="nom" value="<?php if(isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']); ?>">
				                    </div>

				                </div>

				                <div class="form-group">

				    	        	<label for="prenom" class="col-md-2 control-label">Prénom</label>
				                    <div class="col-md-6">
				                        <input class="form-control" type="text" placeholder="prenom" name="prenom" id="prenom" value="<?php if(isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']); ?>">
				                    </div>
				                </div>

				                <div class="form-group">

				                    <label for="email" class="col-md-2 control-label">Email</label>
				                    <div class="col-md-6">
				                        <input class="form-control" type="mail" placeholder="Email" name="email" id="email" value="<?php if(isset($_POST['email']))echo htmlspecialchars($_POST['email']); ?>">
				                    </div>
				                </div>

				                <div class="form-group">

				                    <label for="message" class="col-md-2 control-label">Message</label>
				                    <div class="col-md-6 ">
				                        <textarea class="form-control" rows="7" placeholder="Informez-nous" name="message" ><?php if(isset($_POST['message'])) echo htmlspecialchars($_POST['message']); ?></textarea>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <div class="col-sm-offset-2 col-sm-10">
				                      <button type="submit" class="btn btn-primary">Envoyer</button>
				                      <span style="color:red;"><?php echo $erreur; ?></span>
				                      <span style="color:green;"><?php echo $success; ?></span>
				                    </div>

				                </div>
				        </fieldset>
				    </form>
				</div>
			</div>
		
			<?php include_once("vue/includes/sidebar.php");?>
		</div>
	</div>
	
	<?php include_once("vue/includes/footer.php");?>

	<script type="text/javascript">
		$(document).ready(function()
		{
				$('#contactez-nous').addClass("active");
		});
	</script>
</body>
</html>
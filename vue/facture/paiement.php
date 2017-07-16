
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue sur ED</title>	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vue/bootstrap/css/bootstrap.css">
	<script src="vue/js/jquery.min.js"></script>
	<script src="vue/bootstrap/js/bootstrap.js"></script>
	<style type="text/css">
		.thumbnail>img {
			width:300px;
			height:200px;
		}
	</style>
</head>
<body>
	<?php include_once "vue/includes/header.php"; ?>
	<div class="container">
		<article class="row">
		
			<div class="col-md-8">
				
				
				
					<form class="form-horizontal panel-group" role="form" method="post" action="?session=panier&statut=valider">
					<div  class="panel panel-default">
						
						<!--Titre formulaire-->
						<div class="panel-heading">Paiement</div>
						
						<!--corp formulaire-->
						<div class="panel-body">
							
							<!--Option de paiement-->
							<h4>Option paiement</h4><br>
							<div class="col-md-offset-4">
							
								
							
								<input type="radio" name="myType" id="masterCard" value="masterCard">
								<label for="masterCard"><img src="vue/images/masterCard.jpg" alt="masterCard" width=30%/></label><br>

								<input type="radio" name="myType" id="paypal" value="paypal">
								<label for="paypal"><img src="vue/images/paypal.gif" alt="paypal" width="80%" /></label><br>
								<input type="radio" name="myType" id="visa" value="visa">
								<label for="visa"><img src="vue/images/visaCard.jpg" alt="visaCard" width=30% /></label><br>

								
							</div>
							
 							<div class="form-group">
								<label for="code" class="control-label col-sm-3">Code carte</label>
								<div class="col-sm-8">
									<input type="text" name="code" id="code" class="form-control" placeholder="xxxx-xxxx-xxxx-xxxx">
								</div>
							</div>
							<div class="form-group">
								<label for="key" class="control-label col-sm-3">Code d'accès</label>
								<div class="col-sm-8">
									<input type="password" name="key" id="key" class="form-control" placeholder="***" value="">
								</div>
							</div>
							<div class="form-group">
								<label for="exp" class="control-label col-sm-3">Date d'expiration</label>
								<div class="col-sm-8">
									<input type="date" name="exp" id="exp" class="form-control" placeholder="dd-mm-yyyy">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3"></label>
								<div class="col-sm-8 ">
									<input type="submit" name="submit" class="btn btn-success" value="Valider paiement">
								</div>
							</div>
						</div>
					</div>
				</form>

				<?php echo $notification; ?>
			</div>
			<?php include_once "vue/includes/sidebar.php"; ?>
		</article>	
	</div>
	<?php include_once "vue/includes/footPer.php";?>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('.ajout-panier').on('click',function(e){
				//$('#panier').fadeOut('slow').fadeIn('slow');
				e.preventDefault();
				var $this = $(this);
				$.ajax({
					url: $this.attr('href'),
					type: 'GET',
					success: function()
					{ 

						$('#header').load('vue/includes/header.php');
						
					}
				});
			});
		});
	</script>
</body>
</html>

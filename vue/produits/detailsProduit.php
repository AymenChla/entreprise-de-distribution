<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue sur ED</title>	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vue/bootstrap/css/bootstrap.css">
	<script src="vue/js/jquery.min.js"></script>
	<script src="vue/bootstrap/js/bootstrap.js"></script>
	<style type="text/css">
		.thumbnail>a>img {
			width:300px;
			height:200px;
		}
	</style>
</head>
<body>
	<?php include_once "vue/includes/header.php"; ?>
	<div class="container">
	
		<nav>
		  <ul class="pager">
		    <li class="previous"><a href="" onClick="javascript:window.history.go(-1)" ><span aria-hidden="true">&larr;</span> Retour</a></li>
		  </ul>
		</nav>	

		<article class="row">
			
			<div class="col-md-8">
				
				<section class="col-md-12">
			
						 <div class="thumbnail">
						      <a href="?session=produits&id=<?php echo $details['NOP'];?>"><img src="<?php echo $details['IMAGE'];?>" alt="<?php echo $details['LIB']?>" ></a>
						      <div class="caption">
						        <h3><?php echo $details['LIB'];?></h3>
						        <p><?php echo $details['INFOS'];"...."?></p>
						        <p><a   href="<?php echo "?session=panier&statut=ajouter&nop=".$details['NOP']; ?>" class="btn btn-primary ajout-panier">Ajout panier</a>
						        <span class="col-md-offset-5"><?php echo $details['PU'];?> Dhs</span>
						        </p>
						      </div>
						    </div>
				</section>
				
			</div>
			<?php include_once "vue/includes/sidebar.php"; ?>
		</article>
		
		
	</div>
	<?php include_once "vue/includes/footer.php";?>
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

			$('#produits').addClass("active");
		});
	</script>
</body>
</html>

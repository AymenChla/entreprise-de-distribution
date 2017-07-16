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
		<article class="row">
			
		<div class="col-md-8">
			<img src="vue/images/404.jpg" alt="404">
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

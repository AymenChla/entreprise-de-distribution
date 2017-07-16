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
				<?php 
					if(isset($search) && !empty($search))
					{
						?>
							<div class="panel panel-default">
							  <div class="panel-body">
							  	<h3>Résultat pour: <strong>"<?php echo $search; ?>"</strong></h3>
							  </div>
							</div>
						<?php
					}
				?>
				<section class="col-md-6">
				<?php
					for($i = 0 ; $i < count($produits)/2 ;$i++)
					{
					?>
						 <div class="thumbnail">
						      <a href="?session=produits&id=<?php echo $produits[$i]['NOP'];?>"><img src="<?php echo $produits[$i]['IMAGE'];?>" alt="<?php echo $produits[$i]['LIB']?>" ></a>
						      <div class="caption">
						        <h3><?php echo $produits[$i]['LIB'];?></h3>
						        <p><?php echo $produits[$i]['INFOS'];"...."?></p>
						        <p><a   href="<?php echo "?session=panier&statut=ajouter&nop=".$produits[$i]['NOP']; ?>" class="btn btn-primary ajout-panier">Ajout panier</a>
						        <span class="col-md-offset-5"><?php echo $produits[$i]['PU'];?> Dhs</span>
						        </p>
						      </div>
						    </div>
					<?php
					}
					
				?>
				</section>
				<section class="col-md-6">
				<?php
					for($i = round(count($produits)/2) ; $i < count($produits) ;$i++)
					{
					?>
						
						    <div class="thumbnail">
						      <a href="?session=produits&id=<?php echo $produits[$i]['NOP'];?>"><img src="<?php echo $produits[$i]['IMAGE'];?>" alt="<?php echo $produits[$i]['LIB']?>" ></a>
						      <div class="caption">
						        <h3><?php echo $produits[$i]['LIB']; ?></h3>
						        <p><?php echo $produits[$i]['INFOS']."...."?></p>
						        <p><a  href="<?php echo "?session=panier&statut=ajouter&nop=".$produits[$i]['NOP']; ?>"  class="btn btn-primary ajout-panier">Ajout panier</a>
						        	<span class="col-md-offset-5"><?php echo $produits[$i]['PU'];?> Dhs</span>
						        </p>
						      </div>
						    </div>
						  
						
					<?php
					}
					
						  
				?>
				</section>
			</div>
			<?php include_once "vue/includes/sidebar.php"; ?>
		</article>
		
		<?php 
			if(!isset($_POST['search']))
				{ ?>
		<div class="row">
			<nav class="col-md-offset-4 col-md-4">
			  <ul class="pagination">
			    <li>
			      <a href="?session=produits&page=<?php echo $precedent; ?>" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    	<?php 
			    		for($i=1 ; $i <= $nbPages ; $i++)
			    		{
			    			echo "<li><a href='?session=produits&page=".$i."'>".$i."</a></li>";
			    		}	
			    	?>
			    <li>
			      <a href="?session=produits&page=<?php echo $suivant; ?>" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</div>
		<?php 
			}
		?>
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

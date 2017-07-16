
	<header class="navbar navbar-fixed-top navbar-default">
		<div class="row container-fluid">
			<div class="col-md-12">
					<a href="index.php" class="navbar-brand">ED</a>
					<ul class="navbar-nav nav navbar-right">
						<?php 
						if(isset($_SESSION['user']))
							 echo '<li><a href = "?session=connexion&statut=2">Se deconnecter</a></li>';
						else echo '<li><a href="?session=enregistrer">S\'enregistrer</a></li>';
						?>				
						<li><a href="#">Contactez-nous</a></li>
					</ul>
			</div>
		</div>
		<hr/>
		<div class="row container">
			<div class="col-md-5 col-md-offset-4">
				<form class="navbar-form" role="search" method="post" action="?session=produits">
					<div class="input-group col-md-12">
							<input type="search" name="search" class="form-control" placeholder="search something">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
					</div>  
				</form>
			</div>
				<ul class="navbar-nav nav navbar-right">
					<li><a href="?session=produits">Produits</a></li>					
					<li>
						<a href="?session=panier&statut=afficher">
							<i class="glyphicon glyphicon-shopping-cart"></i>
							Panier
							<?php 
								if(isset($_SESSION['panier']) && count($_SESSION['panier']['nop']) != 0)
								{
									echo "<span class='badge'>".count($_SESSION['panier']['nop'])."</span>";
								} 
								else
									echo "<span class='badge'>0</span>";
							?>
							
						</a>
					</li>
				</ul>
		</div>
	</header>
	<div style="margin-bottom:150px;"></div>
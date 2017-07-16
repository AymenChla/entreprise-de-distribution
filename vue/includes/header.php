<?php 
	error_reporting(0);
	if(!isset($_SESSION['panier'])) session_start();
?>

<style type="text/css">

	.badge{
		background-color: #337AB7;
	}
	.navbar{
		
	}
	.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus{
		background-color: #337AB7;
		color: #FFF;
	}
	.nav .dropdown:hover > ul ,.nav .dropdown:focus > ul{
		display: block;
	}
	.nav .dropdown:hover> ul > li:hover {
		background-color:  #337AB7;
	}
	.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus{
		color: #fff;
		background-color: #337AB7;
	}
	.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
		background-color: #337AB7;
		color :#FFF;
	}
</style>
	<header id="header" class="navbar navbar-fixed-top navbar-default">
		<div class="container">
				<a href="index.php" class="navbar-brand">ED</a>
				<ul class="navbar-nav nav navbar-right">
					<li id="accueil" class="hvr-sweep-to-bottom"><a href="index.php" >Acceuil</a></li>
					<li id="produits"><a href="?session=produits">Produits</a></li>
					<li id="contactez-nous"><a href="?session=contactez-nous">Contactez-nous</a></li>
					<?php 
						if(isset($_SESSION['user']))
						{
							 ?>
									<li id="monCompte" class="dropdown">
							          <a href="?session=monCompte&statut=parametre" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bonjour <strong><?php echo $_SESSION['user']['prenom'];?></strong><span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li><a href="?session=monCompte&statut=parametre">Mon compte</a></li>
							            <li><a href="?session=monCompte&statut=mesCommandes">Mes commandes</a></li>
							            <li role="separator" class="divider"></li>
							             <li class="dropdown-header"><i class="glyphicon glyphicon-map-marker"></i><b>Suivre ma commande</b></li>
							            <li><a href="?session=monCompte&statut=mesCommandes&d=1">Dernière commande</a></li>
							            <li><a href="?session=monCompte&statut=mesCommandes">Toutes mes commandes</a></li>
							            <li role="separator" class="divider"></li>
							            <li><a href="?session=connexion&statut=2"><i class="glyphicon glyphicon-off"> </i> Se déconnecter</a></li>
							          </ul>
							        </li>
						
							<?php }
						else
						{ ?>
									<li class="dropdown" id="votreCompte">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Votre compte<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li><a href="?session=connexion&statut=3">Se connecter</a></li>
							            <li role="separator" class="divider"></li>
							            <li><a href="?session=enregistrer">S'inscrire</a></li>
							          </ul>
							        </li>
				   <?php }
					?>
					<li id="panier">
						<a  href="?session=panier&statut=afficher"  >
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
	<div style="margin-bottom:50px;"></div>
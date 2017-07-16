<div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="?session=admin&p=ajout" class="active">Ajout Produits</a></li>
                <li><a href="?session=admin&p=produits">Consulter Produit</a></li>
                <li><a href="?session=admin&p=client">Tables Renseignements</a></li>
                
                <?php 
                  if(isset($_SESSION['admin']))
                  {
                    ?>
                      <li><a href="?session=admin&p=connexion&statut=2"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
                    <?php
                  }
                  
                ?>
              </ul>  
            </nav> 
          </div>
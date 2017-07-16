<!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Vos Nouveaux Produits</h1>
        </header>
        <div class="profile-photo-container">
          <img src="admin/vue/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="?session=admin&p=client"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>
           
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

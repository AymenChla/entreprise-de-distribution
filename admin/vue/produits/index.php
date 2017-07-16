 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Ajout de Produits</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="admin/vue/css/font-awesome.min.css" rel="stylesheet">
    <link href="admin/vue/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/vue/css/templatemo-style.css" rel="stylesheet">
    <style type="text/css">
      .thumbnail>a>img {
      width:300px;
      height:200px;
    }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
<body> 
    <?php include_once("admin/vue/includes/sidebar.php"); ?>
    <?php include_once("admin/vue/includes/header.php"); ?>
    
 <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Produits</h2><br>
            
              
              <div class="container">
                <div class="row">
                  <form class="form-horizontal panel-group col-md-4" role="form" action="?session=admin&p=produits" method="post">
                    <div class="panel panel-default">
                      <div class="panel-body">
                     
                        <div class="input-group">
                            <input type="search" name="search" class="form-control" placeholder="search something">
                            <div class="input-group-btn">
                              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
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
                         
                              <a href="?session=produits&id=<?php echo $produits[$i]['NOP'];?>"><img src="<?php echo $produits[$i]['IMAGE'];?>" alt="<?php echo $produits[$i]['LIB']?>" ></a>
                              <div class="caption">
                                <h3><?php echo $produits[$i]['LIB'];?></h3>
                                <p><?php echo $produits[$i]['INFOS'];"...."?></p>
                                <p><a   href="?session=admin&p=ajout&id=<?php echo $produits[$i]['NOP'] ?>" class="btn btn-primary ">Modifier</a>
                                <span class="col-md-offset-5"><?php echo $produits[$i]['PU'];?> Dhs</span>
                                </p>
                                <p><a  id="supprimer" href="<?php echo "?session=admin&p=ajout&statut=supprimer&id=".$produits[$i]['NOP']; ?>"  class="btn btn-primary">Supprimer</a>
                                  <span class="col-md-offset-5"><?php echo $produits[$i]['PU'];?> Dhs</span>
                                                                                                                                                  
                                </p>
                              
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
                        
                            
                              <a href="?session=produits&id=<?php echo $produits[$i]['NOP'];?>"><img src="<?php echo $produits[$i]['IMAGE'];?>" alt="<?php echo $produits[$i]['LIB']?>" ></a>
                              <div class="caption">
                                <h3><?php echo $produits[$i]['LIB']; ?></h3>
                                <p><?php echo $produits[$i]['INFOS']."...."?></p>
                                <p><a  href="<?php echo "?session=admin&p=ajout&id=".$produits[$i]['NOP']; ?>"  class="btn btn-primary ">Modifier</a>
                                  <span class="col-md-offset-5"><?php echo $produits[$i]['PU'];?> Dhs</span>

                                </p>
                                <p><a  id="supprimer" href=<?php echo '?session=admin&p=ajout&statut=supprimer&id='.$produits[$i]['NOP']; ?>  class="btn btn-primary" >Supprimer</a>
                                  <span class="col-md-offset-5"><?php echo $produits[$i]['PU'];?> Dhs</span>
                                                                                                                                                  
                                </p>
                              
                            </div>
                          
                        
                      <?php
                      }
                      
                          
                    ?>
                    </section>
                  </div>
                </article>
                
                <div class="row">
                  <nav class="col-md-offset-4 col-md-4">
                    <ul class="pagination">
                      <li>
                        <a href="?session=admin&p=produits&page=<?php echo $precedent; ?>" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                        <?php 
                          for($i=1 ; $i <= $nbPages ; $i++)
                          {
                            echo "<li><a href='?session=admin&p=produits&page=".$i."'>".$i."</a></li>";
                          } 
                        ?>
                      <li>
                        <a href="?session=admin&p=produits&page=<?php echo $suivant; ?>" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
          </div>
        </div>
      </div>


 </body>
 </html>

     







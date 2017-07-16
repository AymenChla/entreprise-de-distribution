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
            <h2 class="margin-bottom-10">Ajouter le Produit</h2><br>

            <form action="?session=admin&p=ajout" class="templatemo-login-form" method="post" enctype="
            multipart/form-data">
           
             <div class="row form-group">
                
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Nom du Produit</label>
                    <input type="text" class="form-control" id="inputLastName" name="lib" value="<?php if(isset($produits)) echo $produits['LIB'] ?>">                  
                </div> 
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName2">Prix en DH</label>
                    <input type="text" class="form-control" id="inputLastName2" name="pu" value="<?php if(isset($produits)) echo $produits['PU']?>" >                  
                </div> 
                								
                
                <div class="col-lg-12">
                  <label class="control-label templatemo-block">Lien de Votre Image</label> 
                  <!-- <input type="file" name="fileToUpload" id="fileToUpload" class="margin-bottom-10"> -->
                 <input type="text" class="form-control" id="inputImage" name="img" value="<?php if(isset($produits)) echo $produits['IMAGE'] ?>">
                                    
                </div>
               
              </div>
              
            
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">Informations sur votre Produit</label>
                    <textarea class="form-control" id="inputNote" rows="10" name="infos"><?php if(isset($produits)) echo $produits['INFOS'];   ?></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    
                                                                                
                <input name="submit" type="submit" class="templatemo-blue-button" value="Enregistrer">
                <input type="reset" class="templatemo-white-button" value="Reset">
              </div>   
                </div> 
              </div>
              
                                         
            </form>
          </div>
        </div>
      </div>
 </body>
 </html>

     







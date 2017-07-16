
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Manage Users</title>
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
    <!-- Left column -->
     <?php include_once("admin/vue/includes/sidebar.php"); ?>
      <?php include_once("admin/vue/includes/header.php"); ?> 

        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by"># <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">First Name <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Last Name <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Adress <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Email <span class="caret"></span></a></td>
                     <td>Delete</td>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach ($clients as $key => $client) {
                  echo "
                      <tr>
                        <td>".$client['NOCLI']."</td>
                        <td>".$client['PRENOM']."</td>
                        <td>".$client['NOM']."</td>
                        <td>".$client['ADRESSE']."</td>
                        <td>".$client['EMAIL']."</td>
                        <td><a  href='?session=admin&p=client&statut=supprimer&id=".$client['NOCLI']."' class='templatemo-link'>Delete</a></td>
                      </tr>";
                      
                    }
                  ?>
                           
                </tbody>
              </table>    
            </div>                          
          </div>          
          <div class="templatemo-flex-row flex-content-row">
            
            <div class="col-1">              
                      
                     
            </div>                       
          </div> <!-- Second row ends -->
          <div class="templatemo-flex-row flex-content-row">
            
            <div class="templatemo-content-widget white-bg col-1 text-center templatemo-position-relative">
            <img src="admin/vue/images/person.jpg" alt="Bicycle" class="img-circle img-thumbnail margin-bottom-30">
            <h2 class="text-uppercase blue-text margin-bottom-5"><?php if(isset($_SESSION['admin'])) echo $_SESSION['admin']['nom']." ".$_SESSION['admin']['prenom'];?></h2>
              <h3 class="text-uppercase margin-bottom-70">Manager </h3>
              <div class="templatemo-social-icons-container">
                <div class="social-icon-wrap">
                  <i class="fa fa-facebook templatemo-social-icon"></i>  
                </div>
                <div class="social-icon-wrap">
                  <i class="fa fa-twitter templatemo-social-icon"></i>  
                </div>
                <div class="social-icon-wrap">
                  <i class="fa fa-google-plus templatemo-social-icon"></i>  
                </div>                
              </div>
            </div>
                       
            </div>
          </div>
          <div class="pagination-wrap">
            <ul class="pagination">
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li class="active"><a href="#">3 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="fa fa-play"></i></span>
                </a>
              </li>
            </ul>
          </div>          
          <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name 
            | Designed by <a href="http://www.templatemo.com" target="_parent">templatemo</a></p>
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>
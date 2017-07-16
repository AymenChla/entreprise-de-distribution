<!DOCTYPE html>
<html lang="en">
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

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>

<?php include_once("vue/includes/header.php");?>
<div class="container">

              <form class="form-horizontal panel-group" role="form" action="?session=produits" method="post">
          
          <div class="input-group col-md-12">
            <input type="search" name="search" class="form-control" placeholder="search something">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
          </div>
      
        </form> 
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <a href="?session=produits&id=15"><img src="vue/images/iph6.jpg" alt="iphone6" width="250" height="145"></a>
      </div>

      <div class="item">
        <a href="?session=produits&id=3"><img src="vue/images/lap.jpg" alt="laptop" width="250" height="145"><a>
      </div>
    
      <div class="item">
        <a href="?session=produits&id=10"><img src="vue/images/calc.jpg" alt="calculatrice" width="250" height="145"></a>
      </div>

      <div class="item">
        <a href="?session=produits&id=2"><img src="vue/images/smart.jpg" alt="smarttv" width="250" height="145"></a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<a href='?session=produits'> Voir Tous Nos Produits </a>
</div><br><br>
</body>
</html>

  </div>
  <?php include_once "vue/includes/footer.php";?>
  <script type="text/javascript">
    $(document).ready(function()
    {
        $('#accueil').addClass("active");
    });
  </script>
</body>
</html>


			
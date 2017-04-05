<!DOCTYPE html>
<?php
session_start();
require '../SRC/config.php';
require '../Class/Products.php';
require '../Class/Images.php';

?>
<html>
    <head>
        <title>koszyk</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../CSS_JS_BOOT/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../CSS_JS_BOOT/main.css" type="text/css">
    </head>
    <body>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1       " aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../HTML/index1.php">Nazwa</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="../Sites/basket.php" data-toggle="modal"> Mój koszyk</a></li>
        <li> <a href="index1.php"> <?php if(!empty($_SESSION['email'])) echo "Witaj:". $_SESSION['email']; ?></a></li>
        <li> <a href="logout.php"> <?php if(!empty($_SESSION['email'])) echo "Wyloguj"; ?></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        
        <script src="../CSS_JS_BOOT/jquery.min.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/jquery.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/bootstrap.min.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/app.js" type="text/javascript">  </script>
              <?php
              
                
       
                if(!empty($_GET['id'])){
                    $product_id = $_GET['id'];
                    $images = Images::loadAllImagesById($connection,$product_id);
                        if($images == NULL){
                        echo "Brak obrazkow";                    
                        }else{
                        foreach($images as $image){
                        }
                         }
                }
                
                elseif(!empty($_GET['keywords'])){
                    $tytul = $_GET['keywords'];
                    $searchGames = Products::loadProductByTitle($connection,$tytul);
                    $product_id=$searchGames->getId();
                    $images = Images::loadAllImagesById($connection,$product_id);
                        if($images == NULL){
                            echo "Brak obrazkow";                    
                        }else {
                            foreach($images as $image){
                            }
                         }
                }
                
              ?>
      <div class="row">
          <div class="col-md-6">
              <div id="karuzela" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                  <?php
                    $number = 0;
                    foreach($images as $image){
                        echo ('<li data-target="#karuzela" data-slide-to="'.$number.'" ');
                        if($number == 0)
                            echo('class="active"');
                        
                        echo('>');
                        echo ('</li>');
                        $number++;
                    }
                
                ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php
                    $number = 1;
                    foreach($images as $image){
                        echo ('<div class="item ');
                        if($number == 1)
                            echo('active');
                        
                        echo('">');
                        echo "<img src='".$image->getImagePath()."' alt=\"$number\">";
                        echo ('</div>');
                        $number++;
                    }
                ?>
                
            </div>
<!--            <a span="left carousel-control" href="#karuzela" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Poprzedni</span>
            </a>
            <a span="right carousel-control" href="#karuzela" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Następny</span>
            </a>-->
                 
        </div>

             
          </div>
          <div class="col-md-6">
              <div class="col-md-3">
               <?php
               $produkt = Products::loadProductsById($connection, $product_id);
               echo $produkt->getTytul()."<br>";        
               echo "<td><a href='../Sites/basket.php?add=".$product_id."'>".$produkt->getCena()."</a></td><br>";
               echo $produkt->getDataPremiery()."<br>";     
                ?>
              </div>
               <div class="col-md-9">
               <?php
               $produkt = Products::loadProductsById($connection, $product_id);
               echo $produkt->getTytul()."<br>";        
               echo "<td><a href='../Sites/basket.php?add=".$product_id."'>".$produkt->getCena()."</a></td>";
               echo $produkt->getDataPremiery()."<br>";     
                ?>
              </div>
          </div>
      </div>
<?php 
?>
    </body>
</html>
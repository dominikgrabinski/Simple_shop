<!DOCTYPE html>
<?php
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
 
        <button type="button" class="btn btn-default" onclick="history.back();" style="font-weight: normal;">
        Powrót do sklepu        
        </button>
        
        <script src="../CSS_JS_BOOT/jquery.min.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/jquery.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/bootstrap.min.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/app.js" type="text/javascript">  </script>
              <?php
                $product_id = $_GET['id'];
                $images = Images::loadAllImagesById($connection,$product_id);
                if($images == NULL){
                    echo "Brak obrazkow cioto";                    
                }
                else {
                    foreach($images as $image){
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
            <a span="left carousel-control" href="#karuzela" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Poprzedni</span>
            </a>
            <a span="right carousel-control" href="#karuzela" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Następny</span>
            </a>
                 
        </div>

             
          </div>
          <div class="col-md-6">
               tu dane
          </div>
      </div>
<?php 
?>
    </body>
</html>
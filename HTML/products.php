<!DOCTYPE html>
<?php session_start();
require '../SRC/config.php';
require '../Class/Products.php';?>
<html>
    <head>
        <title>Sklep z grami</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS_JS_BOOT/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../CSS_JS_BOOT/main.css" type="text/css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        
    </head>
    <body >
        
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
              data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index1.php">Nazwa</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     

      <ul class="nav navbar-nav navbar-right">
        <li> <a href="../Sites/basket.php" data-toggle="modal"> Mój koszyk</a></li>
        <li> <a href="index1.php"> <?php if(!empty($_SESSION['email'])) echo "Witaj:". $_SESSION['email']; ?></a></li>
        <li> <a href="logout.php"> <?php if(!empty($_SESSION['email'])) echo "wyloguj"; ?></a></li>
      </ul> 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        
       
     
      <?php
      
      $platforma = $_GET['platform'];
      $searchGames = Products :: loadProductsByPlatform($connection,$platforma);
     
      if($searchGames == NULL){
          echo 'brak gier w sklepie'; 
          
      }
      else {
            echo "<table class='thmain'>";
            echo "<tr>";
            echo "<th>Tytuł</th>";
            echo "<th>Platforma</th>";
            echo "<th>Gatunek</th>";
            echo "<th>Opis</th>";
            echo "<th>Cena</th>";
            echo "<th>Kategoria wiekowa</th>";
            echo "<th>Wydawca</th>";
            echo "<th>Język w grze</th>";
            echo "<th>Data premiery</th>";
            echo "<th>Promocja</th>";
            echo "<th>Edycja</th>";
            echo "</tr>";
            
            foreach ($searchGames as $value){
         
                        echo "<tr><td ><a href='../Sites/oneproduct.php?id=".$value->getId()."'>".$value->getTytul()."</a></td>";
                        echo "<td>".$value->getPlatforma()."</td>";
                        echo "<td>".$value->getGatunek()."</td>";
                        echo "<td>".$value->getOpis()."</td>";
                        echo "<td><a href='../Sites/basket.php?add=".$value->getId()."'>".$value->getCena()."</a></td>";
                        echo "<td>".$value->getKategoriaWiekowa()."</td>";
                        echo "<td>".$value->getWydawca()."</td>";
                        echo "<td>".$value->getJezyk()."</td>";
                        echo "<td>".$value->getPromocja()."</td>";
                        echo "<td>".$value->getEdycja()."</td>";
                        echo "<td>" .$value->getGatunek()."</td></tr>";
            
                      
            }
            echo "</table>";
        }?>

        
        
        <script src="../CSS_JS_BOOT/jquery.min.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/bootstrap.min.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/app.js" type="text/javascript">  </script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </body>
</html>

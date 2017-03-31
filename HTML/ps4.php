<!DOCTYPE html>
<?php session_start();?>
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
      <ul class="nav navbar-nav">
        <li class="active">
            <a href="ps3.php">PS3 <span class="sr-only">(current)</span></a>
        </li>
       </ul>

       <ul class="nav navbar-nav navbar-right">
        <li> <a href="../Sites/basket.php" data-toggle="modal"> Mój koszyk</a></li>
        <li> <a href="index1.php"> <?php if(!empty($_SESSION['email'])) echo "Witaj:". $_SESSION['email']; ?></a></li>
        <li> <a href="logout.php"> <?php if(!empty($_SESSION['email'])) echo "wyloguj"; ?></a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
          
        <script src="../CSS_JS_BOOT/jquery.min.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/bootstrap.min.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/app.js" type="text/javascript">  </script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </body>
</html>

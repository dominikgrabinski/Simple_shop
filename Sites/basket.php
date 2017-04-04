<!DOCTYPE html>
<?php
session_start();
require '../Class/Basket.php';
require '../SRC/config.php';
?>
<html>
    <head>
        <title>koszyk</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../CSS_JS_BOOT/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../CSS_JS_BOOT/main.css" type="text/css">
    </head>
    <body">
  
        
        <?php
        echo "<pre>    Tu będzie Twój koszyk</pre>"
        ?>
        
        <button type="button" class="btn btn-default" onclick="history.back();" style="font-weight: normal;">
        Powrót do sklepu        
        </button>
        
        <script src="../CSS_JS_BOOT/jquery.min.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/jquery.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/bootstrap.min.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/app.js" type="text/javascript">  </script>
        
       <?php
        $basket = Basket::loadBasketFromSession();
        if($basket == NULL)
            $basket = new Basket();
        
        if(!empty($_GET['add'])){
            $basketItem = BasketItem::loadBasketItemById($connection, $_GET['add'], 1);
            try {
                $basket->addItem($basketItem);
            }catch(Exception $e){
                if($e->getCode() == 1){
                    $basket->addOneItemCount($basketItem);
                }
                
            }
        }
        
        var_dump($basket);
        $basket->saveBasketToSession();
       ?>
    </body>
</html>

<!DOCTYPE html>
<?php session_start();?>
<html>
    <head>
        <title>Sklep z grami</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS_JS_BOOT/main.css" type="text/css">
                <link href="../CSS_JS_BOOT/bootstrap.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="../CSS_JS_BOOT/jquery.min.js" type="text/javascript">  </script>
    </head>
    <body >
        
<nav class="navbar">
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
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
             aria-haspopup="true" aria-expanded="false">PlayStation 3 <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="products.php?platform=ps3">Gry</a></li>
            <li><a href="#">Kody PSN</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Bestsellery</a></li>
            <li><a href="#">Nowości</a></li>
            <li><a href="#">Promocje</a></li>
            <li><a href="#">Edycje Limitowane</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
             aria-haspopup="true" aria-expanded="false">PlayStation 4 <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="products.php?platform=ps4">Gry</a></li>
            <li><a href="#">Kody PSN</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Bestsellery</a></li>
            <li><a href="#">Nowości</a></li>
            <li><a href="#">Promocje</a></li>
            <li><a href="#">Edycje Limitowane</a></li>
          </ul>
        </li>
        
      </ul>
        
        <form class="navbar-form navbar-left" action="../Sites/oneproduct.php">
            <div class="form-group ui-widget" style="height: 35px; border-bottom:1px solid #3498DF " >
                <input id="tags" type="text" name="keywords" placeholder="Nazwa gry..." 
                    class="ui-autocomplete-input" autocomplete="off"style="height: 35px;" >
            </div>
            <button style="border-bottom: 2px solid #3498DF; height: 35px;" type="submit" class="btn btn-default">Szukaj
            </button>
      </form>
        
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="#" id="login_button"> Moje konto</a></li>
        <li> <a href="../Sites/basket.php" data-toggle="modal"> Mój koszyk</a></li>
        <li> <a href="account.php"> <?php if(!empty($_SESSION['email'])) echo "Witaj:". $_SESSION['email']; ?></a></li>
        <li> <a href="logout.php"> <?php if(!empty($_SESSION['email'])) echo "Wyloguj"; ?></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
        <div class="głowna">
 
        <div class="modal-content 
             col-md-6 col-md-offset-3" id="logowanie_box">
            <div class="modal-header">
                <button type="button" class="close">×</button>
                <h4>Logowanie</h4>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-6">
                        <form action="../Verify/login_check.php" method="POST">
                            <div><label>E-mail: </label>
                                <input type="text" class="hidden"><input type="text" name="email" class="form-control">
                            </div>
                            <div><label>Hasło: </label>
                                <input type="password" name="password" value="" class="form-control"></div>
                            <div>
                                <div class="text-center">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Zaloguj">
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div class="col-md-6">
                        <div style="padding: 0px 30px 0 30px;">
                            <div>
                                <label>lub...</label><br>
                            </div>
                            
                            <div>
                                <a href="#" class="btn btn-primary" style="width: 100%;">Zarejestruj konto</a>
                            </div>
                            <div style="line-height: 1.3em; font-size: 0.75em;">Wybór przycisku powyżej oznacza iż akceptujesz <a href="../Files/regulamin.pdf">regulamin serwisu</a>.</div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="modal-footer" style="margin-top: 0;">
                <div style="font-size: 0.9em;" class="text-left"><a href="#">Nie pamiętam hasła</a></div>
            </div>
        </div>
        
        
        <div class="modal-content col-md-6 col-md-offset-3">
            <div class="modal-header">
                <button type="button" class="close" >×</button>
                <h4>Szybka rejestracja</h4>
            </div>
            <div>
                
                <form action="../Verify/register.php" method="post">
                    <div class="form-group">
                        <label for="Register_username" class="required">E-mail</label>
                        <div class="hidden"><input type="text" name="email" value=""></div>
                        <input type="text" name="email" required="required" class="form-control">
                          
                        <label for="Register_username" class="required">Hasło</label>
                        <div class="hidden"><input type="password" name="password" value=""></div>
                        <input type="password" name="password" required="required" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-1 text-center"><input type="checkbox" id="Register_accept_terms" name="Register[accept_terms]" required="required" value="1">
                            </div>
                            <div class="col-xs-11 text-justify">
                                <div style="line-height: 1.3em; font-size: 0.75em;">Akceptuję <a href="../Files/regulamin.pdf">regulamin sklepu</a> oraz wyrażam zgodę na umieszczenie moich danych osobowych w bazie danych oraz ich przetwarzanie i wykorzystywanie do celów marketingowych przez firmę ................., zgodnie z treścią ustawy z 29.08.1997 r. o ochronie danych osobowych (Dz.U. Nr 133, poz. 883). Oświadczam, że cel przetwarzania moich danych osobowych jest mi znany oraz jestem świadomy(a) faktu przysługującego mi wglądu do moich danych osobowych oraz prawa ich poprawiania.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="text-center">
                            <input class="btn btn-primary" type="submit" name="submit" value="Załóż konto">
                           
                       </div>
                    </div>
                </form>
                
            </div>
            <div class="modal-footer"></div>
                
            
        </div>
        
<!--        <div id="karuzela" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#karuzela" data-slide-to="0" class="active"></li>
                <li data-target="#karuzela" data-slide-to="1"></li>
                <li data-target="#karuzela" data-slide-to="2"></li>
                <li data-target="#karuzela" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="../img/1.jpg" alt="1">
                </div>
                <div class="item">
                    <img src="../img/2.jpg" alt="2">
                </div>
                <div class="item">
                    <img src="../img/3.jpg" alt="3">
                </div>
                <div class="item">
                    <img src="../img/4.jpg" alt="3">
                </div>
                
            </div>
            <a span="left carousel-control" href="#karuzela" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Poprzedni</span>
            </a>
            <a span="right carousel-control" href="#karuzela" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Następny</span>
            </a>
                  
-->   
    </div>
<?php
if(isset($_SESSION['email'])){ ?>
    <script>
        $('#login_button').click(function(){
        $(location).attr('href', 'http://localhost/kurs/sklep/Simple_shop/HTML/account.php');
        });
    </script>
<?php }else{?>
    <script>
    $('#login_button').click(function(){
    $('#logowanie_box').fadeIn('slow');
});
    </script>
    <?php }?>
        <script src="../CSS_JS_BOOT/bootstrap.min.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/app.js" type="text/javascript">  </script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </div>
    </body>
</html>

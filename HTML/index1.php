<!DOCTYPE html>
<?php session_start();?>
<html class="index1">
    <head>
        <title>Sklep z grami</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../CSS_JS_BOOT/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../CSS_JS_BOOT/main.css" type="text/css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        
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
      <a class="navbar-brand" href="index1.html">Nazwa</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
             aria-haspopup="true" aria-expanded="false">PlayStation 3 <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Gry</a></li>
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
    <li><a href="#">Gry</a></li>
            <li><a href="#">Kody PSN</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Bestsellery</a></li>
            <li><a href="#">Nowości</a></li>
            <li><a href="#">Promocje</a></li>
            <li><a href="#">Edycje Limitowane</a></li>
          </ul>
        </li>
        
      </ul>
        
      <form class="navbar-form navbar-left">
        <div class="form-group ui-widget" style="height: 35px; border-bottom:1px solid #3498DF " >
            <input id="tags" type="text" name="keywords" placeholder="Nazwa gry..." 
                class="ui-autocomplete-input" autocomplete="off"style="height: 35px;" >
         
<!--sciagniete z neta z powyzsze 7 linijek i nie tylko :)-->

        </div>
          
<!--          <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: block; top: 54px; left: 295px; width: 262px;"><li class="ui-autocomplete-category">Produkty</li><li class="ui-menu-item" role="presentation"><a id="ui-id-134" class="ui-corner-all" tabindex="-1">Guardians of the Galaxy Metals <strong>Di</strong>ecast Mini Figure Potted Groot 10 cm Gadżety (Gadżety)</a></li><li class="ui-menu-item" role="presentation"><a id="ui-id-135" class="ui-corner-all" tabindex="-1">Dragonball Z Super Master Stars Piece Figure Vegeta Manga <strong>Di</strong>mensions 24 cm Gadżety (Gadżety)</a></li><li class="ui-menu-item" role="presentation"><a id="ui-id-136" class="ui-corner-all" tabindex="-1">Dragonball Z Super Master Stars Piece Figure Trunks Manga <strong>Di</strong>mensions 24 cm Gadżety (Gadżety)</a></li><li class="ui-menu-item" role="presentation"><a id="ui-id-137" class="ui-corner-all" tabindex="-1"><strong>Di</strong>RT 4 PC (PC)</a></li><li class="ui-menu-item" role="presentation"><a id="ui-id-138" class="ui-corner-all" tabindex="-1"><strong>Di</strong>RT 4 PS4 (PlayStation 4)</a></li><li class="ui-menu-item" role="presentation"><a id="ui-id-139" class="ui-corner-all" tabindex="-1">Stellaris: Utopia (PC/MAC/LX) PL <strong>DI</strong>GITAL Klucze (Klucze do gier)</a></li><li class="ui-menu-item" role="presentation"><a id="ui-id-140" class="ui-corner-all" tabindex="-1">BeatCop (PC/MAC/LX) PL <strong>DI</strong>GITAL + BONUSY! Klucze (Klucze do gier)</a></li><li class="ui-menu-item" role="presentation"><a id="ui-id-141" class="ui-corner-all" tabindex="-1">Śródziemie: Cień Wojny - Złota Edycja (PC) PL <strong>DI</strong>GITAL + BONUS! Klucze (Klucze do gier)</a></li><li class="ui-menu-item" role="presentation"><a id="ui-id-142" class="ui-corner-all" tabindex="-1">Impact Winter (PC) PL <strong>DI</strong>GITAL + BONUS! Klucze (Klucze do gier)</a></li><li class="ui-menu-item" role="presentation"><a id="ui-id-143" class="ui-corner-all" tabindex="-1"><strong>Di</strong>RT 4 XONE (Xbox One)</a></li><li class="ui-autocomplete-more ui-menu-item" role="presentation"><a href="/search/?keywords=di" id="ui-id-144" class="ui-corner-all" tabindex="-1"><strong>Zobacz więcej (121)...<strong></strong></strong></a></li></ul>-->
        <button style="border-bottom: 2px solid #3498DF; height: 35px;" type="submit" class="btn btn-default">Szukaj
        </button>
   
      </form>
         
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="#" data-toggle="modal" data-target="#login" id="login_button"> Moje konto</a></li>
        <li> <a href="../Sites/basket.php" data-toggle="modal"> Mój koszyk</a></li>
        <li> <a href="index1.php"> <?php if(!empty($_SESSION['email'])) echo "Witaj:". $_SESSION['email']; ?></a></li>
        <li> <a href="logout.php"> <?php if(!empty($_SESSION['email'])) echo "wyloguj"; ?></a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
 
</nav>
        
        <div class="modal-content 
             col-md-6 col-md-offset-3" id="logowanie_box">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Logowanie</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="../Verify/login_check.php" method="POST">
                            <div class="form-group"><label>E-mail: </label>
                                <input type="text" class="hidden"><input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group"><label>Hasło: </label>
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
                            <div class="form-group">
                                <label>lub...</label><br>
                                <a href="/connect/facebook" class="btn btn-facebook" style="width: 100%;"><span class="icon"></span> Zaloguj się z Facebook</a>
                            </div>
                            <div class="form-group">
                                <a href="/connect/google" class="btn btn-default" style="width: 100%;"><span class="icon"></span> Zaloguj się z Google</a>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#register" data-dismiss="modal">Zarejestruj konto</a>
                            </div>
                            <div style="line-height: 1.3em; font-size: 0.75em;">Wybór jednego z przycisków powyżej oznacza iż akceptujesz <a href="../Files/regulamin.pdf" target="regulamin">regulamin serwisu</a>.</div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="modal-footer" style="margin-top: 0;">
                <div style="font-size: 0.9em;" class="text-left"><a href="/account/recover/">Nie pamiętam hasła</a></div>
            </div>
        </div>
        
        
        <div class="modal-content col-md-6 col-md-offset-3">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Szybka rejestracja</h4>
            </div>
            <div class="modal-body">

                <p>Podaj swój adres e-mail - wyślemy Tobie natychmiast wiadomość z linkiem aktywującym Twoje nowe konto.</p>
                
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
                            <div class="col-xs-1 text-center"><input type="checkbox" id="Register_accept_terms" name="Register[accept_terms]" required="required" value="1"></div>
                            <div class="col-xs-11 text-justify">
                                <div style="line-height: 1.3em; font-size: 0.75em;">Akceptuję <a href="../Files/regulamin.pdf">regulamin serwisu</a> oraz wyrażam zgodę na umieszczenie moich danych osobowych w bazie danych oraz ich przetwarzanie i wykorzystywanie do celów marketingowych przez firmę ................., zgodnie z treścią ustawy z 29.08.1997 r. o ochronie danych osobowych (Dz.U. Nr 133, poz. 883). Oświadczam, że cel przetwarzania moich danych osobowych jest mi znany oraz jestem świadomy(a) faktu przysługującego mi wglądu do moich danych osobowych oraz prawa ich poprawiania.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="text-center">
                            <input class="btn btn-primary" type="submit" name="submit" value="Załóż konto">
                            <input type="hidden" id="Register_type" name="Register[type]" value="1"><input type="hidden" id="Register__token" name="Register[_token]" value="35fccfd9cd96d879ef3976151c6b96221f974381">
                        </div>
                    </div>
                </form>
                
            </div>
            <div class="modal-footer" style="margin-top: 0;">
                <div class="text-justify" style="font-size: 0.9em; line-height: 1.2em;">Masz już konto? <a href="#" data-toggle="modal" data-target="#login" data-dismiss="modal">Zaloguj się</a>.</div>
            </div>
        </div>
        
        <script src="../CSS_JS_BOOT/jquery.min.js" type="text/javascript">  </script>
        <!--<script src="../CSS_JS_BOOT/jquery.js" type="text/javascript">  </script>-->
        <script src="../CSS_JS_BOOT/bootstrap.min.js" type="text/javascript">  </script>
        <script src="../CSS_JS_BOOT/app.js" type="text/javascript">  </script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </body>
</html>
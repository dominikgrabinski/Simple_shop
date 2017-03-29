<?php
require_once '../SRC/config.php';
require_once '../Class/User.php';

session_start();

  if(!empty($_POST['email']))
  {

    if (!empty($_POST['password']))
    {
      $user = new User();
      $pass = $user->setPassword($_POST['password']);

      $query="SELECT COUNT(*) as ilosc,id,name FROM Users WHERE email='".$_POST['email']."' AND password='$pass'";
      
      $result = $connection->query($query);
      $row = $result->fetch_assoc();
      if($row['ilosc'] == 1 )
      {
        // session_regenerate_id();
        //$_SESSION['userIP'] = $_SERVER['REMOTE_IP'];
        $_SESSION['userID'] = $row['id'];
  
        echo "Trwa przekierowanie na strone główna";
        header( "refresh:1;url=../HTML/index1.html" );
      }
      else
      {
        echo "Błędne dane logowania spróbuj jesze raz";
        header( "refresh:2;url=../HTML/index1.html" );
      }
    }
    else
    {
    echo "Podaj hasło!";
//    header( "refresh:3;url=loginhtml.php" );
    }
  }
  else
  {
    echo "Podaj email!";
//    header( "refresh:3;url=loginhtml.php" );
  }

  ?>


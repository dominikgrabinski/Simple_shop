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

      $query="SELECT COUNT(*) as ilosc,id,username FROM Users WHERE email='".$_POST['email']."' AND hashed_password='$pass'";
      $result = $connection->query($query);
      $row = $result->fetch_assoc();
      if($row['ilosc'] == 1 )
      {
        // session_regenerate_id();
        //$_SESSION['userIP'] = $_SERVER['REMOTE_IP'];
        $_SESSION['userID'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        echo "Trwa przekierowanie na strone główna";
        header( "refresh:3;url=glowna.php" );
      }
      else
      {
        echo "NIET";
        header( "refresh:2;url=loginhtml.php" );

      }
    }
    else
    {
    echo "Podaj hasło!";
    header( "refresh:3;url=loginhtml.php" );
    }
  }
  else
  {
    echo "Podaj email!";
    header( "refresh:3;url=loginhtml.php" );
  }

  ?>


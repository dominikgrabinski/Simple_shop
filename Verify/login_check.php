<?php
require_once '../SRC/config.php';
require_once '../Class/User.php';

session_start();

  if(!empty($_POST['email']))
  {

    if (!empty($_POST['password']))
    {
      $user = new User();
      $query="SELECT COUNT(*) as ilosc,id,name,salt,password FROM Users WHERE email='".$_POST['email']."'";
      
      $result = $connection->query($query);
      $row = $result->fetch_assoc();
      if($row['ilosc'] == 1 )
      {
        $user->setSalt($row['salt']);
        $pass = $user->setPassword($_POST['password']);
        
        if($pass != $row['password']){
            echo "Błędne dane logowania spróbuj jesze raz";
            header( "refresh:2;url=../HTML/index1.html" );
        }else {
            // session_regenerate_id();
            //$_SESSION['userIP'] = $_SERVER['REMOTE_IP'];
            $_SESSION['userID'] = $row['id'];
            $_SESSION['email']=$_POST['email'];
            $user->setLastLoginDate();
            $user->setId($row['id']);
            $user->setName($row['name']);
            $user->setEmail($_POST['email']);
            $user->saveToDb($connection);
            echo "Trwa przekierowanie na strone główna";
            header( "refresh:1;url=../HTML/index1.php" );
        }
      }
      else
      {
        echo "Błędne dane logowania spróbuj jesze raz";
        header( "refresh:2;url=../HTML/index1.php" );
      }
    }
    else
    {
    echo "Podaj hasło!";
    header( "refresh:2;url=../HTML/index1.php" );
    }
  }
  else
  {
    echo "Podaj email!";
    header( "refresh:2;url=../HTML/index1.php" );
  }

  ?>


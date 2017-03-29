<?php

require_once '../SRC/config.php';
require_once('../Class/User.php');

session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{

  if(!empty($_POST['email']))
  {
      if (!empty($_POST['password']))
      {
        $valEmail=$_POST['email'];

        $query = mysqli_query($connection, "SELECT * FROM Users WHERE email='".$valEmail."'");

        if(mysqli_num_rows($query) > 0)
        {
          echo "Taki email istnieje już w bazie!";
          header( "refresh:2;url=registerhtml.php" );
        }
        else
        {
          $user = new User();
          $user->setEmail(trim($_POST['email']));
          $user->setPassword($_POST['password']);
          $user->setName('');
          $user->setSalt('');
          $user->setFirstLoginDate();
          $user->setLastLoginDate();
          $user->savetoDB($connection);

          echo "Zarejestrowano!!";
//          header( "refresh:1;url=../HTML/index1.html" );
        }
      }
      else
      {
        echo('<div style="color:red" >Podaj hasło!</div>');
//        header( "refresh:2;url=registerhtml.php" );
      }
  }
  else
  {
    echo "Podaj email!";
//    header( "refresh:2;url=registerhtml.php" );
  }
}





//if(isset($_POST['register']))
//{
//	$email_id=$_POST['email'];
//	$pass=$_POST['password'];
//	$code=substr(md5(mt_rand()),0,15);
//	mysql_connect('localhost','root','root');
//	mysql_select_db('simple_shop');
//	
//	$insert=mysql_query("insert into verify values('','$email_id','$pass','$code')");
//	$db_id=mysql_insert_id();
//
//	$message = "Your Activation Code is ".$code."";
//    $to=$email_id;
//    $subject="Activation Code For Talkerscode.com";
//    $from = 'michal.stanek@me.com';
//    $body='Your Activation Code is '.$code.' Please Click On This link <a href="verification.php">Verify.php?id='.$db_id.'&code='.$code.'</a>to activate your account.';
//    $headers = "From:".$from;
//    mail($to,$subject,$body,$headers);
//	
//	echo "An Activation Code Is Sent To You Check You Emails";
//}
//
//if(isset($_GET['id']) && isset($_GET['code']))
//{
//	$id=$_GET['id'];
//	$code=$_GET['id'];
//	mysql_connect('localhost','root','');
//	mysql_select_db('sample');
//	$select=mysql_query("select email,password from verify where id='$id' and code='$code'");
//	if(mysql_num_rows($select)==1)
//	{
//		while($row=mysql_fetch_array($select))
//		{
//			$email=$row['email'];
//			$password=$row['password'];
//		}
//		$insert_user=mysql_query("insert into verified_user values('','$email','$password')");
//		$delete=mysql_query("delete from verify where id='$id' and code='$code'");
//	}
//}

?>
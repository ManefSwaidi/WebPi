<?php
  $email=$_POST["email"];
  $password=$_POST["password"];

  require_once "../model/user.php";
  $u=new User(NULL, NULL,$email,$password);
  


  require_once "../controller/usercont.php";
  $controleur=new usercont();
 $res= $controleur->getlogin($u);
  $user=$res->fetch();

    session_start();


  if ($user[5]=='admin'){
    $_SESSION['id']=$user[0];
    $_SESSION['name']=$user[1];
    $_SESSION['lastname']=$user[2];
    $_SESSION['role']=$user[5];

    header("Location:../view/backempty.php");
  }

   else if($user[5]=='utilisateur') {
    $_SESSION['id']=$user[0];
    $_SESSION['name']=$user[1];
    $_SESSION['lastname']=$user[2];
    $_SESSION['role']=$user[5];
    header("Location:../index.php");
  }

   else { 
    header("Location:../view/login.php?error=oui");
  }
  
    











?>
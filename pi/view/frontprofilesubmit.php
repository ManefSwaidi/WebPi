<?php
session_start();
  $id=$_GET["id"];
  
  $name=$_POST["name"];
  $lastname=$_POST["lastname"];
  $email=$_POST["email"];
  $password=$_POST["password"];

  require_once "../model/user.php";
  $u=new User($name,$lastname,$email,$password);
  $u->setId($id);
  


  require_once "../controller/usercont.php";
  $controleur=new usercont();
  $controleur->edit($u);
  $_SESSION['name']=$name;
  $_SESSION['lastname']=$lastname;
  header("Location:../index.php");
    










?>
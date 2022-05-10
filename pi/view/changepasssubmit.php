<?php
$email=$_POST['email'];
$password=$_POST['password'];


require_once "../controller/usercont.php";
  $controleur=new usercont();
  $controleur->editpassword($email,$password);
  header("Location:../view/login.php");
?>
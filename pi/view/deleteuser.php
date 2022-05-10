<?php
 $id=$_GET['id'];

 require_once "../controller/usercont.php";
  $controleur=new usercont();
  $controleur->delete($id);
  
  header("Location:allusers.php");
    



?>
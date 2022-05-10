<?php
$dec=$_GET['dec'];
$id=$_GET['id'];
require_once "../controller/reclamcont.php";
     $controleur=new reclamcont();
     $reclams= $controleur->editdecision($id,$dec);
       header("Location:backreclam.php");


?>
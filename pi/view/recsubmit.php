

<?php

session_start();

  $subject=$_POST["subject"];
  $problem=$_POST["problem"];


  require_once "../model/reclamation.php";
  $u=new reclam();
  $u->setSubject($subject);
  $u->setProblem($problem);
  $u->setIduser($_SESSION['id']);

  require_once "../controller/reclamcont.php";
  $controleur=new reclamcont();
  $controleur->add($u);
  header("Location:mesreclamations.php");
?>
<?php
if(isset($_FILES['file'])){
      $tmpName = $_FILES['file']['tmp_name'];
      $name = $_FILES['file']['name'];
      $size = $_FILES['file']['size'];
      $error = $_FILES['file']['error'];
      move_uploaded_file($tmpName, './upload/'.$name);



  }
?>
<?php 

require_once('../Model/Voyage.class.php');

$voyage = new Voyage($_POST['depart'], $_POST['destination'], $_POST['date_sortie'], $_POST['date_retour'], $_POST['prix'], $_POST['description']);

$voyage->ajouter($name);
header("Location:../affichevoyage.php?");
//echo "oui";
//exit();
?>

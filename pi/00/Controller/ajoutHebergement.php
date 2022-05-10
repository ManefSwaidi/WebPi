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

require_once('../Model/Hebergement.class.php');

$hebergement = new Hebergement($_POST['titre'], $_POST['date_dispo'], $_POST['date_nondispo'], $_POST['prix'], $_POST['description']);

$hebergement->ajouter($name);


header("Location:../affichehebergement.php?");
//echo "oui";
//exit();
?>


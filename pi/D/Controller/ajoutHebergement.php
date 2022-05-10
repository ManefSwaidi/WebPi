<?php 

require_once('../Model/Hebergement.class.php');

$hebergement = new Hebergement($_POST['titre'], $_POST['date_dispo'], $_POST['date_nondispo'], $_POST['prix'], $_POST['description']);

$hebergement->ajouter();


header("Location:../afficheTERRAIN.php?");
//echo "oui";
//exit();
?>

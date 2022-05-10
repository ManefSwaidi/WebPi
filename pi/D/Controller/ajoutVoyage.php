<?php 

require_once('../Model/Voyage.class.php');

$voyage = new Voyage($_POST['depart'], $_POST['destination'], $_POST['date_sortie'], $_POST['date_retour'], $_POST['prix'], $_POST['description']);

$voyage->ajouter();
header("Location:../afficheEQUIPE.php?");
//echo "oui";
//exit();
?>

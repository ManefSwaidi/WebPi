<?php 

require_once('../Model/Annonce.class.php');

$annonce = new Annonce($_POST['type_ann'],$_POST['titre_ann'], $_POST['cat_ann'], $_POST['photo_ann'], $_POST['message_ann']);

$annonce->ajouter();
header("Location:../contact.php?resultat=oui");
//echo "oui";
//exit();
?>

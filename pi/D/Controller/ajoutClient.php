<?php 

require_once('../Model/Client.class.php');

$client = new Client($_POST['nom_cl'],$_POST['prenom_cl'], $_POST['email_cl'], $_POST['cin_cl'], $_POST['login_cl'], $_POST['mdp_cl']);
	
$client->ajouter();
header("Location:../login.php?resultat=oui");
//echo "oui";
//exit();
?>



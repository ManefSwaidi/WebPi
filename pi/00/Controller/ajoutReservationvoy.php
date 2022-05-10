
<?php 

require_once('../Model/reservationvoy.class.php');
$name = $_GET['id_voy'];

$Reservationvoy = new Reservationvoy($_POST['id_client'],$_POST['nom'], $_POST['prenom'], $_POST['num_tel'], $_POST['email']);

$Reservationvoy->ajouter($name);


//echo "oui";
//exit();
?>


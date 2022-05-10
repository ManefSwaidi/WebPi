
<?php 

require_once('../Model/reservationheb.class.php');
$name = $_GET['id_heb'];

$Reservationheb = new Reservationheb($_POST['id_client'],$_POST['nom'], $_POST['prenom'], $_POST['num_tel']);

$Reservationheb->ajouter($name);


//echo "oui";
//exit();
?>


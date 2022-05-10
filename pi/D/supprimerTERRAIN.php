<?php
include 'Model/Voyage.class.php';
include 'includes/connect_db.php';

$sql = "DELETE FROM `lc_terrain` WHERE `id_heb` = $_GET[id_heb]";
$stmt = $bdd->prepare($sql);
$res = $stmt->execute();
header('location: afficheTERRAIN.php')

?>


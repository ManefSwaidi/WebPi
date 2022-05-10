<?php
include 'Model/Voyage.class.php';
include 'includes/connect_db.php';

$sql = "DELETE FROM `equipee` WHERE `id_voy` = $_GET[id_voy]";
$stmt = $bdd->prepare($sql);
$res = $stmt->execute();
header('location: afficheEQUIPE.php')

?>


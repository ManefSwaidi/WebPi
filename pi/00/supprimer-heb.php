<?php
include('/includes/connect_db.php');

$sql = "DELETE FROM `hebergement` WHERE `id_heb` = $_GET[id_heb]";
$stmt = $bdd->prepare($sql);
$res = $stmt->execute();
header('location: affichehebergement.php')

?>


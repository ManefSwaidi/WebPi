<?php
include('/includes/connect_db.php');

$sql = "DELETE FROM `voyage` WHERE `id_voy` = $_GET[id_voy]";
$stmt = $bdd->prepare($sql);
$res = $stmt->execute();
header('location: affichevoyage.php')

?>


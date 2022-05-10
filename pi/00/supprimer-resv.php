<?php
include('/includes/connect_db.php');

$sql = "DELETE FROM `reservationvoy` WHERE `id_res` = $_GET[id_res]";
$stmt = $bdd->prepare($sql);
$res = $stmt->execute();
header('location: reservation_voyage.php')

?>


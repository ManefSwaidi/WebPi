
<?php
include('/includes/connect_db.php');



 $sql =("UPDATE `voyage` SET `id_voy` = :id_voy, 
          `depart` = :depart, 
          `destination` = :destination  
        `date_sortie` = :date_sortie
          `date_retour` = :date_retour
          `prix` = :prix
          `description` = :description  

          WHERE `id_voy` = $_GET[id_voy]");
      
$stmt = $bdd->prepare($sql);                                  
$stmt->bindParam(':id_voy', $_POST[id_voy], PDO::PARAM_INT);  
  $stmt->bindParam(':depart', $_POST[depart], PDO::PARAM_STR);   
    $stmt->bindParam(':destination', $_POST[destination], PDO::PARAM_STR);   

$stmt->bindParam(':date_sortie', $_POST[date_sortie], PDO::PARAM_STR);    
$stmt->bindParam(':date_retour', $_POST[date_retour], PDO::PARAM_STR);
$stmt->bindParam(':prix', $_POST[prix], PDO::PARAM_INT);   
$stmt->bindParam(':description', $_POST[description], PDO::PARAM_STR); 
$stmt->execute();
header('location: affichevoyage.php')

?>

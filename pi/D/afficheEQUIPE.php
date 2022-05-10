<?php
  $host = 'localhost';
  $dbname = 'miracle';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM equipee";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>


<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 <h1>Liste des Equipes</h1>
 <table class="table table-dark table-striped">
   <thead>
     <tr>
       <th>Id_Equipe</th>
       <th>Nom de Equipe</th>
                            <th>Nom de Reservation</th>
       <th>Date de Debut de Reservation</th>
   
    <th>Date de Fin de Reservation</th>

       <th>Membres Total</th>
                     <th>Autres Remarques</th>
                                          <th>Modifer</th>
                     <th>Supprimer</th>

     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id_voy']); ?></td>
       <td><?php echo htmlspecialchars($row['depart']); ?></td>
              <td><?php echo htmlspecialchars($row['destination']); ?></td>
       <td><?php echo htmlspecialchars($row['date_sortie']); ?></td>
       <td><?php echo htmlspecialchars($row['date_retour']); ?></td>
       <td><?php echo htmlspecialchars($row['prix']); ?></td>
       <td><?php echo htmlspecialchars($row['description']); ?></td>
       <td><a href="modifierEQUIPE.php?id_voy=<?php echo $row['id_voy']; ?>&depart=<?php echo $row['depart']; ?>&destination=<?php echo $row['destination']; ?>&date_sortie=<?php echo $row['date_sortie']; ?>&date_retour=<?php echo $row['date_retour']; ?>&prix=<?php echo $row['prix']; ?>&description=<?php echo $row['description']; ?>">Modifier</a></td>
<td><a href="supprimerEQUIPE.php?id_voy=<?php echo $row['id_voy']; ?>">Supprimer</a></td>

     </tr>


     <?php endwhile; ?>
   </tbody>
 </table>
</body
></html>



                  
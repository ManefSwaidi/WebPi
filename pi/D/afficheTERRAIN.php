<?php
  $host = 'localhost';
  $dbname = 'miracle';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM lc_terrain";
   
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
 <h1>Liste des Terrains</h1>
 <table class="table table-dark table-striped">
   <thead>
     <tr>
       <th>Id_terrain</th>
       <th>Nom De Votre Terrain</th>
                            <th>Date Et Temps Disponible</th>
       <th>Date Et Temps Non Disponible</th>
   
    <th>Prix Par Personne</th>

       <th>Description De Terrain</th>
                                          <th>Modifer</th>
                     <th>Supprimer</th>

     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id_heb']); ?></td>
       <td><?php echo htmlspecialchars($row['titre']); ?></td>
       <td><?php echo htmlspecialchars($row['date_dispo']); ?></td>
       <td><?php echo htmlspecialchars($row['date_nondispo']); ?></td>
       <td><?php echo htmlspecialchars($row['prix']); ?></td>
       <td><?php echo htmlspecialchars($row['description']); ?></td>
<td><a href="modifierTERRAIN.php?id_heb=<?php echo $row['id_heb']; ?>&titre=<?php echo $row['titre']; ?>&date_dispo=<?php echo $row['date_dispo']; ?>&date_nondispo=<?php echo $row['date_nondispo']; ?>&prix=<?php echo $row['prix']; ?>&description=<?php echo $row['description']; ?>">Modifier</a></td>
<td><a href="supprimerTERRAIN.php?id_heb=<?php echo $row['id_heb']; ?>">Supprimer</a></td>

     </tr>


     <?php endwhile; ?>
   </tbody>
 </table>
</body
></html>



                  
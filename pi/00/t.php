    <?php
  $host = 'localhost';
  $dbname = 'miracle';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM voyage";
   
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
    <html lang="en">
       <div id="contenu">
                 <main>

<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 <h1>Liste des voyages</h1>
 <table class="table table-dark table-striped">
   <thead>
     <tr>
       <th>Id_voyage</th>
       <th>Depart</th>
                            <th>Destination</th>
       <th>Date sortie</th>
   
    <th>Date retour</th>

       <th>Prix</th>
                     <th>Desciprtion</th>
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
       <td><a href="modifier-voy.php?id_voy=<?php echo $row['id_voy']; ?>&depart=<?php echo $row['depart']; ?>&destination=<?php echo $row['destination']; ?>&date_sortie=<?php echo $row['date_sortie']; ?>&date_retour=<?php echo $row['date_retour']; ?>&prix=<?php echo $row['prix']; ?>&description=<?php echo $row['description']; ?>">Modifier</a></td>
<td><a href="supprimer-voy.php?id_voy=<?php echo $row['id_voy']; ?>">Supprimer</a></td>

     </tr>


     <?php endwhile; ?>
   </tbody>
 </table>
     <?php include('chauffeur.php')?>

</body

                            </div>
</html>



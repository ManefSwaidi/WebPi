<?php
class Reservationvoy{

private $id_client;
private $nom;
private $prenom;
private $num_tel;
private $email;


function __construct($id_client,$nom,$prenom,$num_tel,$email){

$this->id_client = $id_client;
$this->nom = $nom;
$this->prenom = $prenom;
$this->num_tel = $num_tel;
$this->email = $email;




}

public function ajouter($name){ 

include('../includes/connect_db.php');
    
		$req = $bdd->exec("INSERT INTO `reservationvoy`(`id_client`, `id_voy`, `nom`, `prenom`,  `num_tel`,  `email`) VALUES ('$this->id_client','$name','$this->nom','$this->prenom','$this->num_tel','$this->email')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;

}

}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>
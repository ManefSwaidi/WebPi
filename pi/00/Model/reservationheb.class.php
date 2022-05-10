<?php
class Reservationheb{

private $id_client;
private $nom;
private $prenom;
private $num_tel;


function __construct($id_client,$nom,$prenom,$num_tel){

$this->id_client = $id_client;
$this->nom = $nom;
$this->prenom = $prenom;
$this->num_tel = $num_tel;



}

public function ajouter($name){ 

include('../includes/connect_db.php');
    
		$req = $bdd->exec("INSERT INTO `reservationheb`(`id_client`, `id_heb`, `nom`, `prenom`,  `num_tel`) VALUES ('$this->id_client','$name','$this->nom','$this->prenom','$this->num_tel')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;

}

}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>
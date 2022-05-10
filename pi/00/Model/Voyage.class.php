<?php
class Voyage{
private $depart;
private $destination;
private $date_sortie;
private $date_retour;
private $prix;
private $description;

function __construct($depart,$destination,$date_sortie,$date_retour,$prix,$description){
$this->depart = $depart;
$this->destination = $destination;
$this->date_sortie = $date_sortie;
$this->date_retour = $date_retour;
$this->prix = $prix;
$this->description = $description;

}

public function ajouter($name){ 

include('../includes/connect_db.php');
    
		$req = $bdd->exec("INSERT INTO `voyage`(`depart`, `destination`, `date_sortie`, `date_retour`, `file`, `prix`, `description`) VALUES ('$this->depart','$this->destination','$this->date_sortie','$this->date_retour','$name','$this->prix','$this->description')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
}

}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>
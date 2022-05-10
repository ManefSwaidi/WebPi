<?php
class Hebergement{
private $titre;
private $date_dispo;
private $date_nondispo;
private $prix;
private $description;


function __construct($titre,$date_dispo,$date_nondispo,$prix,$description){
$this->titre = $titre;
$this->date_dispo = $date_dispo;
$this->date_nondispo = $date_nondispo;
$this->prix = $prix;
$this->description = $description;



}

public function ajouter(){ 

include('../includes/connect_db.php');
    
		$req = $bdd->exec("INSERT INTO `lc_terrain`(`titre`, `date_dispo`, `date_nondispo`, `prix`, `description`) VALUES ('$this->titre','$this->date_dispo','$this->date_nondispo','$this->prix','$this->description')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
}

}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>
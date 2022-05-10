<?php
class Annonce{
private $type_ann;
private $titre_ann;
private $cat_ann;
private $photo_ann;
private $message_ann;


function __construct($type_ann,$titre_ann,$cat_ann,$photo_ann){
$this->type_ann = $type_ann;
$this->titre_ann = $titre_ann;
$this->cat_ann = $cat_ann;
$this->photo_ann = $photo_ann;
$this->message_ann = $message_ann;



}

public function ajouter(){ 

include('../includes/connect_db.php');
    
		$req = $bdd->exec("INSERT INTO `contact`(`type_ann`, `titre_ann`, `cat_ann`, `photo_ann`) VALUES ('$this->type_ann','$this->titre_ann','$this->cat_ann','$this->photo_ann','$this->message_ann')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
}
			
}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>
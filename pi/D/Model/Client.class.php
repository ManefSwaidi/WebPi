<?php
class Client{
private $nom_cl;
private $prenom_cl;
private $email_cl;
private $cin_cl;
private $login_cl;
private $mdp_cl;

function __construct($nom_cl,$prenom_cl,$email_cl,$cin_cl,$login_cl,$mdp_cl){
$this->nom_cl = $nom_cl;
$this->prenom_cl = $prenom_cl;
$this->email_cl = $email_cl;
$this->cin_cl = $cin_cl;
$this->login_cl = $login_cl;
$this->mdp_cl = $mdp_cl;



}

public function ajouter(){ 

include('../includes/connect_db.php');
    
		$req = $bdd->exec("INSERT INTO `client`(`nom_cl`, `prenom_cl`, `email_cl`, `cin_cl`, `login_cl`, `mdp_cl`) VALUES ('$this->nom_cl','$this->prenom_cl','$this->email_cl','$this->cin_cl','$this->login_cl','$this->mdp_cl')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
}
			
}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>
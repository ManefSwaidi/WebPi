<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
$mail = new PHPMailer(true);
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$email= $_POST['email'];
$alert='';
try{
    $mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP 
    $mail->Host = 'smtp.gmail.com'; // Spécifier le serveur SMTP
    $mail->SMTPAuth = true; // Activer authentication SMTP
    $mail->Username = 'youssef.gara@esprit.tn'; // Votre adresse email d'envoi
    $mail->Password = '201JMT3404'; // Le mot de passe de cette adresse email
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Accepter SSL
    $mail->Port = 587;

    $mail->setFrom('youssef.gara@esprit.tn'); // Personnaliser l'envoyeur
$mail->addAddress('firas.ridene@esprit.tn'); // Ajouter le destinataire
$mail->isHTML(true); // Paramétrer le format des emails en HTML ou non
$mail->Subject = 'Reservation accomplie';
$mail->Body = '<h3>Nom: $nom <br>Prenom: $prenom<br> reservation';
$mail->send();

$alert='<div class="alert_success">
<span>Message sent!.</span>
</div>
';


}catch(Exception $e)
{
    $alert='<div class="alert_error">
<span>Message non envoye.</span>
</div>
';
}
?>
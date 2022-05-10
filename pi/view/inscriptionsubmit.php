<?php
  $name=$_POST["name"];
  $lastname=$_POST["lastname"];
  $email=$_POST["email"];
  $password=$_POST["password"];

  require_once "../model/user.php";
  $u=new User($name,$lastname,$email,$password);
  


  require_once "../controller/usercont.php";
  $controleur=new usercont();
  $controleur->add($u);
  require_once '../mailer/PHPMailer_5.2.4/class.phpmailer.php';
$mail = new PHPMailer();  // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true;  // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465; 
$mail->Username = 'manef.swsw@gmail.com';  
$mail->Password = 'manef2001manef';           
$mail->SetFrom('manef.swsw@gmail.com', 'Manef Sw');
$mail->Subject = 'Inscription confirm';
$mail->Body = 'Thank you for joining us, If anything comes up feel free to contact by following this link:  http://localhost/pi/view/rec.php';
$mail->AddAddress($email);
if(!$mail->Send()) {
    $error = 'Mail error: '.$mail->ErrorInfo;
    echo $error; 
   
} else {
    $error = 'Message sent!';
    echo '<script> alert("mail is sent"); </script>';
   
}
  
  header("Location:../view/login.php");
    











?>
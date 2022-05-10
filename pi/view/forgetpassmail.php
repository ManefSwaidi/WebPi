

 <?php

$tomail=$_POST['email'];

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
$mail->Subject = 'Change password';
$mail->Body = 'http://localhost/pi/view/changepass.php?email='.$tomail;
$mail->AddAddress($tomail);
if(!$mail->Send()) {
    $error = 'Mail error: '.$mail->ErrorInfo;
    echo $error; 
    return false;
} else {
    $error = 'Message sent!';
    echo '<script> alert("mail is sent"); </script>';
   header("Location:../view/login.php");
    return true;
}

?>
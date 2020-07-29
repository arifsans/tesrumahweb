<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(true);

$mail->SMTPDebug = 3;
$mail->isSMTP();
$mail->Host = "smtp.google.com";
$mail->SMTPAuth = true;
$mail->Username = "yourmail@gmail.com";
$mail->Password = "yourpassword";
$mail->SMTPSecure = "tls";
$mail->Port = 465;

$mail->From = "yourmail@gmail.com";
$mail->FromName = "Fauzan Arif";
$mail->addAddress("recipientsmail@gmail.com","recipientsname");

$mail->isHTML(true);
$mail->Subject = "Test";
$mail->Body = "<i>Mail Body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
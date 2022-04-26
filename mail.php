<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once("PHPMailer/src/PHPMailer.php");
require_once("PHPMailer/src/SMTP.php");
require_once("PHPMailer/src/Exception.php");

$me = "nassim.portfolio@gmail.com";

$mail = new PHPMailer;
$mail->CharSet = "UTF-8";
$mail->Encoding = "base64"; // format d'encodage des données
$mail->isSMTP();
$mail->SMTPDebug = 0; 
$mail->Port = 587;
$mail->SMTPSecure = "tls"; // protocole
$mail->SMTPAuth = true;

/* Gmail config: */
$mail->Username = $me;
$mail->Host = "smtp.gmail.com";
$mail->setFrom( $me , 'Nassim Barkallah');

$mail->Password = file_get_contents(".invisible/password");
$mail->AddAddress($me);

function send_mail( $subject, $body, $is_html = true)
{
    global $mail;
    $mail->Subject = $subject;
    $mail->isHTML($is_html);
    $mail->Body = $body;
    $mail->Send();
}

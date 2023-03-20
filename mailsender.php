<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions

function send_mail($email, $oggetto, $messaggio, $path_allegato = null){
  $mail = new PHPMailer(true);
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '1eb75a7f31333e';                     //SMTP username
    $mail->Password   = '4fd5085cf039fe';                               //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 2525;     
    $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  );                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('edusogno@example.com', 'Edusogno');
    $mail->addAddress($email);
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment($path_allegato);  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $oggetto;
    $mail->Body    = $messaggio;
    $mail->AltBody = '';
    if(!$mail->Send()){
    echo "Errore durante l'invio della mail : " . $mail->ErrorInfo;
      return false;
    } else {
      echo "Check Your Email and Click on the link sent to your email";
      return true;
  }
}
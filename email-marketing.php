<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['email'])) {

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
      //Server settings
      //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'eshopperabc@gmail.com';                 // SMTP username
      $mail->Password = 'nachiketbhuta';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('eshopperabc@gmail.com', 'E-Shopper');
      $mail->addAddress($_POST['email']);     // Add a recipient
      //$mail->addAddress('ellen@example.com');               // Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');

      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Thanks for subscribing E - Shopper';
      $mail->Body = "Hi, " . $_POST['email'] . "You have subscribed to E -Shopper." . "<br>" .
        "The exclusive offers are waiting for you.";

      $mail->send();
      header("Location: index.php");
  } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }
}

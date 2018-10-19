<?php

require 'phpmailer/PHPMailer.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_GET['name'];
$email = $_GET['email'];
$subject = $_GET['subject'];
$message = $_GET['message'];

if( !empty($name) || !empty($email) || !empty($subject) || !empty($message) ){

    //Send mail to admin
    $mail = new PHPMailer();
    $mail->setFrom('noreply@k5financialservices.com', 'K5 Financial Services');
    $mail->addAddress('k5financialservices@outlook.com', 'K5 Financial Services');
    $mail->addReplyTo($email, $name);
    $mail->isHTML(true);
    $mail->Subject = 'New email from contact form!';
    $mail->Body    = "Hello their,<br><br>You have received an email from $name. You can reply to this mail to make contact with sender!<br><br><b>Name:</b> $name<br><b>Email:</b> $email<br><b>Subject:</b> $subject<br><b>Message:</b> $message";
    $mail->send();
    
    //Send mail to sender
    $mail = new PHPMailer();
    $mail->setFrom('noreply@k5financialservices.com', 'K5 Financial Services');
    $mail->addAddress($email, 'K5 Financial Services');
    $mail->addReplyTo('k5financialservices@outlook.com', 'K5 Financial Services');
    $mail->isHTML(true);
    $mail->Subject = "Message Received!";
    $mail->Body    = "Hello $name,<br><br>Thank you for contacting us, this is to confirm that we have received your message and our team shall get back to you soon.<br><br>Regards,<br>K5 Financial Services";
    $mail->send();
    
    echo json_encode( array("result" => "success") );

} else {
    
    echo json_encode( array("result" => "failed") );
    
}

?>
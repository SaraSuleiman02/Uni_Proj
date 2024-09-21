<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/PHPMailer-master/src/Exception.php';
require 'PHPMailer/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer/PHPMailer-master/src/SMTP.php';

require 'config.php';

/**
 * @param [string] $email,
 * @param [string] $subject,
 * @param [string] $message,
 * @return [string] ,
 * 
 */

function sendMail($email , $subject , $message){
    try{
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth=true;
    $mail->Host=MAILHOST;
    $mail->Username=USERNAME;
    $mail->Password=PASSWORD;
    $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port=587;
    $mail->setFrom(SEND_FROM, SEND_FROM_NAME);
    $mail->addAddress($email);
    $mail->addReplyTo(REPLY_TO,REPLY_TO_NAME);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->AltBody = $message;

    if(!$mail -> send()){
        return "email not send";
    }
    else
    return "success";
} catch (Exception $e) {
    return false;
}


}

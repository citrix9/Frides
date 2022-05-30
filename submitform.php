<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
   
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->Username = '215d16ff70bf8d';
$mail->Password = '029883c717af4e';      
$mail->SMTPSecure = 'ssl';                          

    //Recipients
    $mail->setFrom($_POST['mail'] , $_POST['name']);
    $mail->addAddress('letsfrides@gmail.com', 'Frides');     // Add a recipient



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Frides Homepage";
    $mail->Body    = "Name: ".$_POST['name']."<br> Email: "$_POST['email']."<br> Phone number: "$_POST['phone']."<br> Message: "$_POST['message']

    $mail->send();
    header('Location: http://127.0.0.1/index.html');
    exit();
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
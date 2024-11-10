<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PhpMailer/src/Exception.php';
require 'PhpMailer/src/PHPMailer.php';
require 'PhpMailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'nitinutsav80@gmail.com';
    $mail->Password = 'amlw hiaz frow qrzy';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('nitinutsav80@gmail', 'Thipaks');
    $mail->addAddress($_POST['email']);
    // Set HTML 
    $mail->isHTML(TRUE);

    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';

    $mail->Subject = $subject; 
    $mail->Body = "First Name: " . $fname . "<br>" .
                     "Last Name: " . $lname . "<br>" .
                     "Email: " . $email . "<br>" .
                     "Phone: " . $phone . "<br>" .
                     "Message: " . $message;

    if ($mail->send()) {
        echo 'Email sent successfully!';
        header("location: contact.php");
    } else {
        echo 'Email could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
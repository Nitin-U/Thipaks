<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Additional headers
    $headers = "From: nitinutsav80@gmail.com" . "\r\n" .
               "Reply-To: nitinutsav80@gmail.com" . "\r\n" .
               "Content-type: text/html; charset=UTF-8" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>

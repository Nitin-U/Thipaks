<?php
session_start(); // Start the session
require_once "database/config.php";

// Generate a unique token
$token = bin2hex(random_bytes(16)); // Generates a random 32-character token

// Set the expiration time (1 hour from now)
$expiration_time = date('Y-m-d H:i:s', strtotime('+1 week'));

// Insert the token and expiration time into the database
$sql = "INSERT INTO link (token, expiration_time) VALUES (:token, :expiration_time)";

try {
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':token', $token);
    $stmt->bindParam(':expiration_time', $expiration_time);
    $stmt->execute();

    // Generate the survey URL with the token
    $url = "survey.php?token=" . $token;

    // Store the success message in the session
    $_SESSION['success_message'] = "Link has been sent successfully. Click <a href='$url'>here</a> to take the survey.";

    // Redirect back to the original page
    header("Location: send_survey.php"); // Replace 'originalPage.php' with the actual page
    exit;

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

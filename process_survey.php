<?php
// Include the database configuration file
require_once "database/config.php"; // Ensure this file contains your database connection details

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and capture the ratings
    $rating_1 = isset($_POST['rating_1']) ? $_POST['rating_1'] : '';
    $rating_2 = isset($_POST['rating_2']) ? $_POST['rating_2'] : '';
    $rating_3 = isset($_POST['rating_3']) ? $_POST['rating_3'] : '';
    $rating_4 = isset($_POST['rating_4']) ? $_POST['rating_4'] : '';
    $rating_5 = isset($_POST['rating_5']) ? $_POST['rating_5'] : '';
    $rating_6 = isset($_POST['rating_6']) ? $_POST['rating_6'] : '';
    $rating_7 = isset($_POST['rating_7']) ? $_POST['rating_7'] : '';
    $rating_8 = isset($_POST['rating_8']) ? $_POST['rating_8'] : '';
    $rating_9 = isset($_POST['rating_9']) ? $_POST['rating_9'] : '';
    $rating_10 = isset($_POST['rating_10']) ? $_POST['rating_10'] : '';

    // Sanitize and capture the open-ended responses
    $valuable_features = isset($_POST['valuable_features']) ? $_POST['valuable_features'] : '';
    $missing_features = isset($_POST['missing_features']) ? $_POST['missing_features'] : '';
    $user_challenges = isset($_POST['user_challenges']) ? $_POST['user_challenges'] : '';
    $like_most = isset($_POST['like_most']) ? $_POST['like_most'] : '';
    $improvements = isset($_POST['improvements']) ? $_POST['improvements'] : '';
    $additional_feedback = isset($_POST['additional_feedback']) ? $_POST['additional_feedback'] : '';

    try {
        // Prepare the SQL statement with placeholders
        $sql = "INSERT INTO survey (rating_1, rating_2, rating_3, rating_4, rating_5, rating_6, rating_7, rating_8, rating_9, rating_10, valuable_features, missing_features, user_challenges, like_most, improvements, additional_feedback)
                VALUES (:rating_1, :rating_2, :rating_3, :rating_4, :rating_5, :rating_6, :rating_7, :rating_8, :rating_9, :rating_10, :valuable_features, :missing_features, :user_challenges, :like_most, :improvements, :additional_feedback)";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind the parameters to the prepared statement
        $stmt->bindParam(':rating_1', $rating_1);
        $stmt->bindParam(':rating_2', $rating_2);
        $stmt->bindParam(':rating_3', $rating_3);
        $stmt->bindParam(':rating_4', $rating_4);
        $stmt->bindParam(':rating_5', $rating_5);
        $stmt->bindParam(':rating_6', $rating_6);
        $stmt->bindParam(':rating_7', $rating_7);
        $stmt->bindParam(':rating_8', $rating_8);
        $stmt->bindParam(':rating_9', $rating_9);
        $stmt->bindParam(':rating_10', $rating_10);
        $stmt->bindParam(':valuable_features', $valuable_features);
        $stmt->bindParam(':missing_features', $missing_features);
        $stmt->bindParam(':user_challenges', $user_challenges);
        $stmt->bindParam(':like_most', $like_most);
        $stmt->bindParam(':improvements', $improvements);
        $stmt->bindParam(':additional_feedback', $additional_feedback);

        // Execute the prepared statement
        $stmt->execute();

        echo "New survey response recorded successfully!";
        header('location:index.php');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage(); // Handle errors via exception
    }

    // Close the connection (if necessary)
    $conn = null;
}
?>
<?php require_once "database/config.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: output the form data
    echo "<pre>";
    var_dump($_POST);  // or print_r($_POST);
    echo "</pre>";
    
    // Stop further execution to prevent redirection
    exit();

    // Get form data and sanitize input
    $overall_satisfaction = $_POST['overall_satisfaction'];
    $recommendation_likelihood = $_POST['recommendation_likelihood'];
    $product_quality = $_POST['product_quality'];
    $valuable_features = $_POST['valuable_features'];
    $missing_features = $_POST['missing_features'];
    $support_satisfaction = $_POST['support_satisfaction'];
    $support_responsiveness = $_POST['support_responsiveness'];
    $support_resources = $_POST['support_resources'];
    $ease_of_use = $_POST['ease_of_use'];
    $user_challenges = $_POST['user_challenges'];
    $continuation_likelihood = $_POST['continuation_likelihood'];
    $purchase_satisfaction = $_POST['purchase_satisfaction'];
    $purchase_information = $_POST['purchase_information'];
    $likes_most = $_POST['like_most'];
    $suggested_improvements = $_POST['improvements'];
    $additional_feedback = $_POST['additional_feedback'];
    
    // Get current timestamp for submission time
    $submitted_at = date('Y-m-d H:i:s');
    
    // SQL to insert data into the table
    $sql = "INSERT INTO survey (overall_satisfaction, recommendation_likelihood, product_quality, valuable_features, 
            missing_features, support_satisfaction, support_responsiveness, support_resources, ease_of_use, 
            user_challenges, continuation_likelihood, purchase_satisfaction, purchase_information, likes_most, 
            suggested_improvements, additional_comments, submitted_at) 
            VALUES (:overall_satisfaction, :recommendation_likelihood, :product_quality, :valuable_features, 
            :missing_features, :support_satisfaction, :support_responsiveness, :support_resources, :ease_of_use, 
            :user_challenges, :continuation_likelihood, :purchase_satisfaction, :purchase_information, :likes_most, 
            :suggested_improvements, :additional_feedback, :submitted_at)";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':overall_satisfaction', $overall_satisfaction);
    $stmt->bindParam(':recommendation_likelihood', $recommendation_likelihood);
    $stmt->bindParam(':product_quality', $product_quality);
    $stmt->bindParam(':valuable_features', $valuable_features);
    $stmt->bindParam(':missing_features', $missing_features);
    $stmt->bindParam(':support_satisfaction', $support_satisfaction);
    $stmt->bindParam(':support_responsiveness', $support_responsiveness);
    $stmt->bindParam(':support_resources', $support_resources);
    $stmt->bindParam(':ease_of_use', $ease_of_use);
    $stmt->bindParam(':user_challenges', $user_challenges);
    $stmt->bindParam(':continuation_likelihood', $continuation_likelihood);
    $stmt->bindParam(':purchase_satisfaction', $purchase_satisfaction);
    $stmt->bindParam(':purchase_information', $purchase_information);
    $stmt->bindParam(':likes_most', $likes_most);
    $stmt->bindParam(':suggested_improvements', $suggested_improvements);
    $stmt->bindParam(':additional_feedback', $additional_feedback);
    $stmt->bindParam(':submitted_at', $submitted_at);

    // Execute the query
    if ($stmt->execute()) {
        header("location: survey.php");
        exit();
    } else {
        echo "Error submitting survey. Please try again later.";
    }
}
?>

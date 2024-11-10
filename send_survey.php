<?php
session_start(); // Start the session at the top of the page
include 'header.php';
?>

<div class="container margin-start">
    <!-- Check if there's a success message in the session -->
    <?php if (isset($_SESSION['success_message'])): ?>
        <div class="alert alert-success">
            <?php 
                echo $_SESSION['success_message']; 
                unset($_SESSION['success_message']); // Clear the message after displaying it
            ?>
        </div>
    <?php endif; ?>

    <form action="generateSurveyLink.php" method="POST">
        <div class="row">
            <div class="col text-center">
                <button class="btn btn-discovery">Send Survey</button>
            </div>
        </div>
    </form>
</div>

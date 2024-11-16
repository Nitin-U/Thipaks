<?php
ob_start();
include 'header.php'; ?>
<?php require_once "database/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Survey</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .survey-container {
            max-width: 1000px;
            margin: auto;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .btn-submit {
            background-color: #1a73e8;
            color: white;
            width: 100%;
            padding: 0.75rem;
            border: none;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #1967d2;
        }

        .star-rating {
            display: flex;
            gap: 5px;
            font-size: 2em;
            cursor: pointer;
        }

        .star {
            color: lightgray;
            transition: color 0.2s;
        }

        .star:hover,
        .star.hovered {
            color: gold;
        }

        .star.selected {
            color: gold;
        }
    </style>
</head>

<body>

    <?php
    if (isset($_GET['token'])) {
        $token = $_GET['token'];

        // Query the database for the expiration time using the token
        $sql = "SELECT expiration_time FROM link WHERE token = :token";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':token', $token);
            $stmt->execute();

            // Check if a record was found
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                // Get the expiration time from the database
                $expiration_time = $row['expiration_time'];
                $current_time = date('Y-m-d H:i:s');

                // Compare the current time with the expiration time
                if ($current_time > $expiration_time) {
                    // Redirect to the 404 error page if the link has expired
                    header("Location: token_exp.php");
                    exit;
                }
            } else {
                echo "<p>Invalid or missing token.</p>";
                exit;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit;
        }
    } else {
        echo "<p>No token provided.</p>";
        exit;
    }
    ?>

    <div class="container py-5">
        <div class="survey-container">
            <h1 class="text-center">Customer Satisfaction Survey</h1>
            <form method="POST" action="process_survey.php">
                <!-- Hidden token field -->
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">

                <!-- General Satisfaction -->
                <p class="purple"><b>General Satisfaction</b></p>
                <div class="form-group">
                    <label>1. Overall, how satisfied are you with our product/service?</label>
                    <input type="hidden" name="rating_1" id="rating_1" value="">
                    <div class="star-rating" data-rating-id="rating_1" data-display="selected-rating-1">
                        <span class="star" data-value="Very dissatisfied">★</span>
                        <span class="star" data-value="Dissatisfied">★</span>
                        <span class="star" data-value="Neutral">★</span>
                        <span class="star" data-value="Satisfied">★</span>
                        <span class="star" data-value="Very satisfied">★</span>
                    </div>
                    <div id="selected-rating-1">Select a rating</div>
                </div>

                <div class="form-group">
                    <label>2. How likely are you to recommend our product/service to others?</label>
                    <input type="hidden" name="rating_2" id="rating_2" value="">
                    <div class="star-rating" data-rating-id="rating_2" data-display="selected-rating-2">
                        <span class="star" data-value="Not Likely">★</span>
                        <span class="star" data-value="Somewhat Likely">★</span>
                        <span class="star" data-value="Likely">★</span>
                        <span class="star" data-value="Very Likely">★</span>
                        <span class="star" data-value="Extremely Likely">★</span>
                    </div>
                    <div id="selected-rating-2">Select a rating</div>
                </div>

                <div class="form-group">
                    <label>3. How would you rate the quality of our product/service?</label>
                    <input type="hidden" name="rating_3" id="rating_3" value="">
                    <div class="star-rating" data-rating-id="rating_3" data-display="selected-rating-3">
                        <span class="star" data-value="Very Poor">★</span>
                        <span class="star" data-value="Poor">★</span>
                        <span class="star" data-value="Average">★</span>
                        <span class="star" data-value="Good">★</span>
                        <span class="star" data-value="Excellent">★</span>
                    </div>
                    <div id="selected-rating-3">Select a rating</div>
                </div>

                <div class="form-group">
                    <label>4. What features of the product/service do you find most valuable?</label>
                    <textarea name="valuable_features" class="form-control" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label>5. Are there any features you feel are missing or need improvement?</label>
                    <textarea name="missing_features" class="form-control" rows="4"></textarea>
                </div>

                <!-- Customer Support -->
                <p class="purple"><b>Customer Support</b></p>
                <div class="form-group">
                    <label>6. How satisfied are you with the customer support you received?</label>
                    <input type="hidden" name="rating_4" id="rating_4" value="">
                    <div class="star-rating" data-rating-id="rating_4" data-display="selected-rating-4">
                        <span class="star" data-value="Very dissatisfied">★</span>
                        <span class="star" data-value="Dissatisfied">★</span>
                        <span class="star" data-value="Neutral">★</span>
                        <span class="star" data-value="Satisfied">★</span>
                        <span class="star" data-value="Very satisfied">★</span>
                    </div>
                    <div id="selected-rating-4">Select a rating</div>
                </div>

                <div class="form-group">
                    <label>7. How responsive was our support team to your inquiries?</label>
                    <input type="hidden" name="rating_5" id="rating_5" value="">
                    <div class="star-rating" data-rating-id="rating_5" data-display="selected-rating-5">
                        <span class="star" data-value="Very unresponsive">★</span>
                        <span class="star" data-value="Unresponsive">★</span>
                        <span class="star" data-value="Neutral">★</span>
                        <span class="star" data-value="Responsive">★</span>
                        <span class="star" data-value="Very responsive">★</span>
                    </div>
                    <div id="selected-rating-5">Select a rating</div>
                </div>

                <div class="form-group">
                    <label>8. Did you find our support resources (FAQs, help articles, etc.) helpful?</label>
                    <input type="hidden" name="rating_6" id="rating_6" value="">
                    <div class="star-rating" data-rating-id="rating_6" data-display="selected-rating-6">
                        <span class="star" data-value="No">★</span>
                        <span class="star" data-value="Somewhat">★</span>
                        <span class="star" data-value="Yes">★</span>
                    </div>
                    <div id="selected-rating-6">Select a rating</div>
                </div>

                <!-- User Experience -->
                <p class="purple"><b>User Experience</b></p>
                <div class="form-group">
                    <label>9. How easy is it to use our product/service?</label>
                    <input type="hidden" name="rating_7" id="rating_7" value="">
                    <div class="star-rating" data-rating-id="rating_7" data-display="selected-rating-7">
                        <span class="star" data-value="Very difficult">★</span>
                        <span class="star" data-value="Difficult">★</span>
                        <span class="star" data-value="Neutral">★</span>
                        <span class="star" data-value="Easy">★</span>
                        <span class="star" data-value="Very easy">★</span>
                    </div>
                    <div id="selected-rating-7">Select a rating</div>
                </div>

                <div class="form-group">
                    <label>10. What challenges did you encounter while using our product/service?</label>
                    <textarea name="user_challenges" class="form-control" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label>11. How likely are you to continue using our product/service?</label>
                    <input type="hidden" name="rating_8" id="rating_8" value="">
                    <div class="star-rating" data-rating-id="rating_8" data-display="selected-rating-8">
                        <span class="star" data-value="Very unlikely">★</span>
                        <span class="star" data-value="Unlikely">★</span>
                        <span class="star" data-value="Neutral">★</span>
                        <span class="star" data-value="Likely">★</span>
                        <span class="star" data-value="Very likely">★</span>
                    </div>
                    <div id="selected-rating-8">Select a rating</div>
                </div>

                <!-- Purchase Experience -->
                <p class="purple"><b>Purchase Experience</b></p>
                <div class="form-group">
                    <label>12. How satisfied were you with the purchasing process?</label>
                    <input type="hidden" name="rating_9" id="rating_9" value="">
                    <div class="star-rating" data-rating-id="rating_9" data-display="selected-rating-9">
                        <span class="star" data-value="Very dissatisfied">★</span>
                        <span class="star" data-value="Dissatisfied">★</span>
                        <span class="star" data-value="Neutral">★</span>
                        <span class="star" data-value="Satisfied">★</span>
                        <span class="star" data-value="Very satisfied">★</span>
                    </div>
                    <div id="selected-rating-9">Select a rating</div>
                </div>

                <div class="form-group">
                    <label>13. Was the information provided during the purchasing process clear and helpful?</label>
                    <input type="hidden" name="rating_10" id="rating_10" value="">
                    <div class="star-rating" data-rating-id="rating_10" data-display="selected-rating-10">
                        <span class="star" data-value="No">★</span>
                        <span class="star" data-value="Somewhat">★</span>
                        <span class="star" data-value="Yes">★</span>
                    </div>
                    <div id="selected-rating-10">Select a rating</div>
                </div>

                <!-- Open-Ended Questions -->
                <p class="purple"><b>Open-Ended Questions</b></p>
                <div class="form-group">
                    <label>14. What do you like most about our product/service?</label>
                    <textarea name="like_most" class="form-control" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label>15. What improvements would you suggest for our product/service?</label>
                    <textarea name="improvements" class="form-control" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label>16. Is there anything else you would like to share about your experience with us?</label>
                    <textarea name="additional_feedback" class="form-control" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-discovery w-100">Submit</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const ratings = document.querySelectorAll('.star-rating');

            ratings.forEach(ratingGroup => {
                const stars = ratingGroup.querySelectorAll('.star');
                const ratingId = ratingGroup.getAttribute('data-rating-id');
                const displayId = ratingGroup.getAttribute('data-display');

                stars.forEach((star, index) => {
                    star.addEventListener('mouseover', () => {
                        clearHover(ratingId);
                        for (let i = 0; i <= index; i++) {
                            stars[i].classList.add('hovered');
                        }
                    });

                    star.addEventListener('mouseout', () => {
                        clearHover(ratingId);
                    });

                    star.addEventListener('click', () => {
                        clearSelection(ratingId);
                        for (let i = 0; i <= index; i++) {
                            stars[i].classList.add('selected');
                        }
                        const selectedValue = star.getAttribute('data-value');
                        const displayElement = document.getElementById(displayId);
                        displayElement.innerText = `You selected: ${selectedValue}`;
                        document.getElementById(ratingId).value = selectedValue; // Update hidden field with selected value
                    });
                });
            });

            function clearHover(ratingId) {
                const starsInGroup = document.querySelectorAll(`[data-rating-id="${ratingId}"] .star`);
                starsInGroup.forEach(star => star.classList.remove('hovered'));
            }

            function clearSelection(ratingId) {
                const starsInGroup = document.querySelectorAll(`[data-rating-id="${ratingId}"] .star`);
                starsInGroup.forEach(star => star.classList.remove('selected'));
            }
        });

    </script>

    <?php ob_end_flush(); ?>
</body>

</html>
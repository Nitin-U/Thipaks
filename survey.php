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
                    exit; // Stop further script execution
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
                <!-- General Satisfaction -->
                <p class="purple"><b>General Satisfaction</b></p>
                <div class="form-group">
                    <label>1. Overall, how satisfied are you with our product/service?</label>
                    <input type="hidden" name="overall_satisfaction" id="overall_satisfaction" value="">
                    <div class="star-rating" data-display="selected-rating-1">
                        <span class="star" data-value="1" data-text="Very dissatisfied">★</span>
                        <span class="star" data-value="2" data-text="Dissatisfied">★</span>
                        <span class="star" data-value="3" data-text="Neutral">★</span>
                        <span class="star" data-value="4" data-text="Satisfied">★</span>
                        <span class="star" data-value="5" data-text="Very satisfied">★</span>
                    </div>
                    <div id="selected-rating-1">Select a rating</div>
                </div>

                <div class="form-group">
                    <label>2. How likely are you to recommend our product/service to others?</label>
                    <input type="hidden" name="recommendation_likelihood" id="recommendation_likelihood" value="">
                    <div class="star-rating" data-display="selected-rating-2">
                        <span class="star" data-value="1" data-text="Not Likely">★</span>
                        <span class="star" data-value="2" data-text="Somewhat Likely">★</span>
                        <span class="star" data-value="3" data-text="Likely">★</span>
                        <span class="star" data-value="4" data-text="Very Likely">★</span>
                        <span class="star" data-value="5" data-text="Extremely Likely">★</span>
                    </div>
                    <div id="selected-rating-2">Select a rating</div>
                </div>

                <div class="form-group">
                    <label>3. How would you rate the quality of our product/service?</label>
                    <input type="hidden" name="product_quality" id="product_quality" value="">
                    <div class="star-rating" data-display="selected-rating-3">
                        <span class="star" data-value="1" data-text="Very Poor">★</span>
                        <span class="star" data-value="2" data-text="Poor">★</span>
                        <span class="star" data-value="3" data-text="Average">★</span>
                        <span class="star" data-value="4" data-text="Good">★</span>
                        <span class="star" data-value="5" data-text="Excellent">★</span>
                    </div>
                    <div id="selected-rating-3">Select a rating</div>
                </div>

                <div class="form-group">
                    <input type="hidden" name="valuable_features" id="valuable_features" value="">
                    <label>4. What features of the product/service do you find most valuable?</label>
                    <textarea name="valuable_features" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="missing_features" id="missing_features" value="">
                    <label>5. Are there any features you feel are missing or need improvement?</label>
                    <textarea name="missing_features" class="form-control" rows="4"></textarea>
                </div>

                <!-- Customer Support -->
                <p class="purple"><b>Customer Support</b></p>
                <div class="form-group">
                    <input type="hidden" name="support_satisfaction" id="support_satisfaction" value="">
                    <label>6. How satisfied are you with the customer support you received?</label>
                    <div class="star-rating" data-display="selected-rating-4">
                        <span class="star" data-value="Very dissatisfied" data-text="Very dissatisfied">★</span>
                        <span class="star" data-value="Dissatisfied" data-text="Dissatisfied">★</span>
                        <span class="star" data-value="Neutral" data-text="Neutral">★</span>
                        <span class="star" data-value="Satisfied" data-text="Satisfied">★</span>
                        <span class="star" data-value="Very satisfied" data-text="Very satisfied">★</span>
                    </div>
                    <div id="selected-rating-4">Select a rating</div>
                </div>
                <div class="form-group">
                    <input type="hidden" name="support_responsiveness" id="support_responsiveness" value="">
                    <label>7. How responsive was our support team to your inquiries?</label>
                    <div class="star-rating" data-display="selected-rating-5">
                        <span class="star" data-value="Very unresponsive" data-text="Very unresponsive">★</span>
                        <span class="star" data-value="Unresponsive" data-text="Unresponsive">★</span>
                        <span class="star" data-value="Neutral" data-text="Neutral">★</span>
                        <span class="star" data-value="Responsive" data-text="Responsive">★</span>
                        <span class="star" data-value="Very responsive" data-text="Very responsive">★</span>
                    </div>
                    <div id="selected-rating-5">Select a rating</div>
                </div>
                <div class="form-group">
                    <input type="hidden" name="support_resources" id="support_resources" value="">
                    <label>8. Did you find our support resources (FAQs, help articles, etc.) helpful?</label>
                    <div class="star-rating" data-display="selected-rating-6">
                        <span class="star" data-value="Somewhat" data-text="Somewhat">★</span>
                        <span class="star" data-value="No" data-text="No">★</span>
                        <span class="star" data-value="Yes" data-text="Yes">★</span>
                    </div>
                    <div id="selected-rating-6">Select a rating</div>
                </div>

                <!-- User Experience -->
                <p class="purple"><b>User Experience</b></p>
                <div class="form-group">
                    <input type="hidden" name="ease_of_use" id="ease_of_use" value="">
                    <label>9. How easy is it to use our product/service?</label>
                    <div class="star-rating" data-display="selected-rating-7">
                        <span class="star" data-value="Very difficult" data-text="Very difficult">★</span>
                        <span class="star" data-value="Difficult" data-text="Difficult">★</span>
                        <span class="star" data-value="Neutral" data-text="Neutral">★</span>
                        <span class="star" data-value="Easy" data-text="Easy">★</span>
                        <span class="star" data-value="Very easy" data-text="Very easy">★</span>
                    </div>
                    <div id="selected-rating-7">Select a rating</div>
                </div>
                <div class="form-group">
                    <input type="hidden" name="user_challenges" id="user_challenges" value="">
                    <label>10. What challenges did you encounter while using our product/service?</label>
                    <textarea name="user_challenges" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="continuation_likelihood" id="continuation_likelihood" value="">
                    <label>11. How likely are you to continue using our product/service?</label>
                    <div class="star-rating" data-display="selected-rating-8">
                        <span class="star" data-value="Very unlikely" data-text="Very unlikely">★</span>
                        <span class="star" data-value="Unlikely" data-text="Unlikely">★</span>
                        <span class="star" data-value="Neutral" data-text="Neutral">★</span>
                        <span class="star" data-value="Likely" data-text="Likely">★</span>
                        <span class="star" data-value="Very likely" data-text="Very likely">★</span>
                    </div>
                    <div id="selected-rating-8">Select a rating</div>
                </div>

                <!-- Purchase Experience -->
                <p class="purple"><b>Purchase Experience</b></p>
                <div class="form-group">
                    <input type="hidden" name="purchase_satisfaction" id="purchase_satisfaction" value="">
                    <label>12. How satisfied were you with the purchasing process?</label>
                    <div class="star-rating" data-display="selected-rating-9">
                        <span class="star" data-value="Very dissatisfied" data-text="Very dissatisfied">★</span>
                        <span class="star" data-value="Dissatisfied" data-text="Dissatisfied">★</span>
                        <span class="star" data-value="Neutral" data-text="Neutral">★</span>
                        <span class="star" data-value="Satisfied" data-text="Satisfied">★</span>
                        <span class="star" data-value="Very satisfied" data-text="Very satisfied">★</span>
                    </div>
                    <div id="selected-rating-9">Select a rating</div>
                </div>
                <div class="form-group">
                    <input type="hidden" name="purchase_information" id="purchase_information" value="">
                    <label>13. Was the information provided during the purchasing process clear and helpful?</label>
                    <div class="star-rating" data-display="selected-rating-10">
                        <span class="star" data-value="Somewhat" data-text="Somewhat">★</span>
                        <span class="star" data-value="No" data-text="No">★</span>
                        <span class="star" data-value="Yes" data-text="Yes">★</span>
                    </div>
                    <div id="selected-rating-10">Select a rating</div>
                </div>

                <!-- Open-Ended Questions -->
                <p class="purple"><b>Open-Ended Questions</b></p>
                <div class="form-group">
                    <input type="hidden" name="like_most" id="like_most" value="">
                    <label>14. What do you like most about our product/service?</label>
                    <textarea name="like_most" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="improvements" id="improvements" value="">
                    <label>15. What improvements would you suggest for our product/service?</label>
                    <textarea name="improvements" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="additional_feedback" id="additional_feedback" value="">
                    <label>16. Is there anything else you would like to share about your experience with us?</label>
                    <textarea name="additional_feedback" class="form-control" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-discovery w-100">Submit</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const starContainers = document.querySelectorAll('.star-rating');

            starContainers.forEach(container => {
                const stars = container.querySelectorAll('.star');
                const ratingDisplayId = container.getAttribute('data-display');
                const ratingDisplay = document.getElementById(ratingDisplayId);

                // Hidden input field for the selected rating
                const hiddenInputId = container.getAttribute('data-hidden-input') || 'overall_satisfaction';
                const hiddenInput = document.getElementById(hiddenInputId);

                stars.forEach((star, index) => {
                    star.addEventListener('mouseover', () => {
                        clearHover(stars);
                        for (let i = 0; i <= index; i++) {
                            stars[i].classList.add('hovered');
                        }
                    });

                    star.addEventListener('mouseout', () => {
                        clearHover(stars);
                    });

                    star.addEventListener('click', () => {
                        clearSelection(stars);
                        for (let i = 0; i <= index; i++) {
                            stars[i].classList.add('selected');
                        }

                        // Update the rating display
                        const selectedValue = star.getAttribute('data-value');
                        const selectedText = star.getAttribute('data-text');
                        ratingDisplay.innerText = `You selected: ${selectedText} (${selectedValue})`;

                        // Update the hidden input value
                        if (hiddenInput) {
                            hiddenInput.value = selectedValue;
                        }
                    });
                });
            });

            function clearHover(stars) {
                stars.forEach(star => star.classList.remove('hovered'));
            }

            function clearSelection(stars) {
                stars.forEach(star => star.classList.remove('selected'));
            }
        });
    </script>


    <?php ob_end_flush(); ?>
</body>

</html>
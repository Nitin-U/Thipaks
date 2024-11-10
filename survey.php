<?php include 'header.php'; ?>
<?php require_once "database/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Survey</title>
    <style>
        body { font-family: Arial, sans-serif; }
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
        .btn-submit:hover { background-color: #1967d2; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="survey-container">
        <h1 class="text-center">Customer Satisfaction Survey</h1>
        <form method="POST" action="process_survey.php">
            <!-- General Satisfaction -->
            <p class="purple"><b>General Satisfaction</b></p>
            <div class="form-group">
                <label>1. Overall, how satisfied are you with our product/service?</label>
                <select name="overall_satisfaction" class="form-select" required>
                    <option value="">---Select---</option>
                    <option value="10">Very satisfied - 10</option>
                    <option value="5">Satisfied - 5</option>
                    <option value="2">Neutral - 2</option>
                    <option value="1">Dissatisfied - 1</option>
                    <option value="0">Very dissatisfied - 0</option>
                </select>
            </div>
            <div class="form-group">
                <label>2. How likely are you to recommend our product/service to others? (0-10 scale)</label>
                <input type="number" name="recommendation_likelihood" class="form-control" min="0" max="10" required>
            </div>

            <!-- Product/Service Quality -->
            <p class="purple"><b>Product/Service Quality</b></p>
            <div class="form-group">
                <label>3. How would you rate the quality of our product/service?</label>
                <select name="product_quality" class="form-select" required>
                    <option value="">---Select---</option>
                    <option value="Excellent">Excellent</option>
                    <option value="Good">Good</option>
                    <option value="Average">Average</option>
                    <option value="Poor">Poor</option>
                    <option value="Very Poor">Very Poor</option>
                </select>
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
                <select name="support_satisfaction" class="form-select" required>
                    <option value="">---Select---</option>
                    <option value="Very satisfied">Very satisfied</option>
                    <option value="Satisfied">Satisfied</option>
                    <option value="Neutral">Neutral</option>
                    <option value="Dissatisfied">Dissatisfied</option>
                    <option value="Very dissatisfied">Very dissatisfied</option>
                </select>
            </div>
            <div class="form-group">
                <label>7. How responsive was our support team to your inquiries?</label>
                <select name="support_responsiveness" class="form-select" required>
                    <option value="">---Select---</option>
                    <option value="Very responsive">Very responsive</option>
                    <option value="Responsive">Responsive</option>
                    <option value="Neutral">Neutral</option>
                    <option value="Unresponsive">Unresponsive</option>
                    <option value="Very unresponsive">Very unresponsive</option>
                </select>
            </div>
            <div class="form-group">
                <label>8. Did you find our support resources (FAQs, help articles, etc.) helpful?</label>
                <select name="support_resources" class="form-select" required>
                    <option value="">---Select---</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Somewhat">Somewhat</option>
                </select>
            </div>

            <!-- User Experience -->
            <p class="purple"><b>User Experience</b></p>
            <div class="form-group">
                <label>9. How easy is it to use our product/service?</label>
                <select name="ease_of_use" class="form-select" required>
                    <option value="">---Select---</option>
                    <option value="Very easy">Very easy</option>
                    <option value="Easy">Easy</option>
                    <option value="Neutral">Neutral</option>
                    <option value="Difficult">Difficult</option>
                    <option value="Very difficult">Very difficult</option>
                </select>
            </div>
            <div class="form-group">
                <label>10. What challenges did you encounter while using our product/service?</label>
                <textarea name="user_challenges" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label>11. How likely are you to continue using our product/service?</label>
                <select name="continuation_likelihood" class="form-select" required>
                    <option value="">---Select---</option>
                    <option value="Very likely">Very likely</option>
                    <option value="Likely">Likely</option>
                    <option value="Neutral">Neutral</option>
                    <option value="Unlikely">Unlikely</option>
                    <option value="Very unlikely">Very unlikely</option>
                </select>
            </div>

            <!-- Purchase Experience -->
            <p class="purple"><b>Purchase Experience</b></p>
            <div class="form-group">
                <label>12. How satisfied were you with the purchasing process?</label>
                <select name="purchase_satisfaction" class="form-select" required>
                    <option value="">---Select---</option>
                    <option value="Very satisfied">Very satisfied</option>
                    <option value="Satisfied">Satisfied</option>
                    <option value="Neutral">Neutral</option>
                    <option value="Dissatisfied">Dissatisfied</option>
                    <option value="Very dissatisfied">Very dissatisfied</option>
                </select>
            </div>
            <div class="form-group">
                <label>13. Was the information provided during the purchasing process clear and helpful?</label>
                <select name="purchase_information" class="form-select" required>
                    <option value="">---Select---</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Somewhat">Somewhat</option>
                </select>
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


</body>
</html>

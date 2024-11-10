<?php include 'header.php'
    ?>

<?php
$subject = isset($_GET['subject']) ? htmlspecialchars($_GET['subject']) : '';
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
?>

<style>
    .or-text {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 0 10px;
    }
</style>

<div class="container margin-end">
    <div class="row" id="container-margin">
        <div class="col-4 col-lg-4 col-sm-12 d-none d-lg-block text-justify">
            <div class="container p-0 m-0">
                <img src="image/contact.jpg" alt="contact-us" class="img-fluid rounded-3">
            </div>
        </div>
        <div class="col-12 col-lg-8 col-sm-12 align-items-top text-justify p-0 m-0">
            <div class="container d-flex">
                <p>Have questions or need assistance? We’re here to help! Contact us today to learn more about our
                    services or to get support from our expert team.</p>
            </div>
            <div class="container">
                <form action="submit_contact.php" method="post">
                    <div class="row mb-3"> <!-- Row for first name and last name -->
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="First name (required)"
                                aria-label="First name" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Last name (required)"
                                aria-label="Last name" required>
                        </div>
                    </div>
                    <div class="row mb-3 position-relative">
                        <div class="col-6"> <!-- Column for email -->
                            <input type="text" id="email" class="form-control" placeholder="Email" aria-label="Email"
                                required>
                        </div>

                        <!-- "or" text positioned in the center -->
                        <div class="col-6 position-absolute text-center or-text">
                            <span>or</span>
                        </div>

                        <div class="col-6"> <!-- Column for phone -->
                            <input type="text" id="phone" class="form-control" placeholder="Phone" aria-label="Phone"
                                required>
                        </div>
                    </div>
                    <div class="mb-3"> <!-- Row for subject -->
                        <input type="text" class="form-control" name="subject" placeholder="Subject (required)"
                            aria-label="Email" required>
                    </div>
                    <div class="mb-3" style="height: 150px;"> <!-- Adjust height for the message -->
                        <textarea class="form-control" name="message" placeholder="Message (required)"
                            aria-label="Message" style="height: 100%;" required></textarea>
                    </div>
                    <div class="container d-flex justify-content-end gap-2 m-0 p-0">
                        <button type="button" class="btn btn-default btn-sharp-thipaks"
                            id="btn-big-thipaks">Cancel</button>
                        <button type="submit" class="btn btn-discovery btn-sharp-thipaks"
                            id="btn-big-thipaks">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Get the email and phone input elements
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');

    // Function to update required status
    function updateRequiredStatus() {
        if (emailInput.value.trim() !== "") {
            phoneInput.removeAttribute('required');
        } else {
            phoneInput.setAttribute('required', 'required');
        }

        if (phoneInput.value.trim() !== "") {
            emailInput.removeAttribute('required');
        } else {
            emailInput.setAttribute('required', 'required');
        }
    }

    // Attach event listeners to email and phone inputs
    emailInput.addEventListener('input', updateRequiredStatus);
    phoneInput.addEventListener('input', updateRequiredStatus);
</script>

<?php include 'footer.php';
?>
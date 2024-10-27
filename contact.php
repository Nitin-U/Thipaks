<?php include 'header.php'
?>

    <div class="container margin-end">
        <h1 class="text-center">Contact Us</h1>
        <div class="row">
            <div class="col-4 col-lg-4 col-sm-12 d-none d-lg-block text-justify">
                <div class="container p-0 m-0">
                    <img src="image/contact.jpg" alt="contact-us" class="img-fluid rounded-3" >
                </div>
            </div>
            <div class="col-12 col-lg-8 col-sm-12 align-items-top text-justify p-0 m-0">
                <div class="container d-flex">
                    <p>Have questions or need assistance? We’re here to help! Contact us today to learn more about our services or to get support from our expert team.</p>
                </div>
                <div class="container">
                    <form action="">
                        <div class="row mb-3"> <!-- Row for first name and last name -->
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="First name (required)" aria-label="First name">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Last name (required)" aria-label="Last name">
                            </div>
                        </div>
                        <div class="mb-3"> <!-- Row for email -->
                            <input type="text" class="form-control" placeholder="Email (required)" aria-label="Email">
                        </div>
                        <div class="mb-3"> <!-- Row for subject -->
                            <input type="text" class="form-control" placeholder="Subject (required)" aria-label="Email">
                        </div>
                        <div class="mb-3" style="height: 150px;"> <!-- Adjust height for the message -->
                            <textarea class="form-control" placeholder="Message (required)" aria-label="Message" style="height: 100%;"></textarea>
                        </div>
                        <div class="container d-flex justify-content-end gap-2 m-0 p-0">
                            <button type="button" class="btn btn-default btn-sharp-thipaks" id="btn-big-thipaks">Cancel</button>
                            <button type="button" class="btn btn-discovery btn-sharp-thipaks" id="btn-big-thipaks">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php';
?>
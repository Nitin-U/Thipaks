<?php include 'header.php'; ?>

<style>
    .card {
        border: none;
        background-color: none;
    }
    .card-img-top {
        width: 120px; /* Set a fixed width for the images */
        height: 120px; /* Set a fixed height for the images */
        display: block;
        margin: 0 auto;
        border-radius: 50%; /* Make the images rounded */
        object-fit: cover;
    }
</style>

<div class="container margin-end">
    <h1 class="text-center">Our Team</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-6 col-md-4 col-sm-6">
            <div class="card h-100 pt-5">
                <p class="card-title text-center fw-semibold text-discovery">Dipak Adhikari</p>
                <img src="image/Bionic.jpg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text text-center">CEO</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-sm-6">
            <div class="card h-100 pt-5">
                <p class="card-title text-center fw-semibold text-discovery">Maheswar Khadga</p>
                <img src="image/Mahesh.jpeg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text text-center">Lead Business Analyst</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-sm-6">
            <div class="card h-100 pt-5">
                <p class="card-title text-center fw-semibold text-discovery">Roshan Neupane</p>
                <img src="image/Roshan.jpg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text text-center">Cyber Security Specialist</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-sm-6">
            <div class="card h-100 pt-5">
                <p class="card-title text-center fw-semibold text-discovery">Nitin Utsav Bartaula</p>
                <img src="image/Nitin.jpg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text text-center">Developer</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-sm-6">
            <div class="card h-100 pt-5">
                <p class="card-title text-center fw-semibold text-discovery">Suyog Sharma</p>
                <img src="image/Suyog.png" class="card-img-top">
                <div class="card-body">
                    <p class="card-text text-center">Developer</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
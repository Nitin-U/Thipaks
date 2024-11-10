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
    i.hover_info{
        cursor: pointer;
    }
</style>

<div class="container margin-end">
    <div class="row row-cols-1 row-cols-md-3 g-4" id="container-margin">
        <div class="col-6 col-md-4 col-sm-6">
            <div class="card h-100 pt-5">
                <p class="card-title text-center fw-semibold text-discovery">Maheswar Khadga</p>
                <img src="image/Mahesh.jpeg" class="card-img-top">
                <div class="card-body">
                    <div>
                        <p class="card-text text-center">Lead Business Analyst</p>
                    </div>
                    <div>
                        <p class="card-text text-center"><i class="fa-solid fa-circle-info hover_info" data-bs-toggle="modal" data-bs-target="#maheshModal"></i></p>
                    </div>
                    <div class="modal fade" tabindex="-1" id="maheshModal" aria-labelledby="maheshModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="maheshModalLabel" style="cursor:pointer">About Our Lead Business Analyst</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero saepe adipisci, aliquam dolore blanditiis dolorum ad, perferendis quis rem quos, illum quod tenetur explicabo. Voluptatem placeat voluptatibus nobis sint ea? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, doloremque sapiente impedit reiciendis molestias alias, dolor cum dolores quas autem suscipit expedita ipsam iste tenetur architecto ab molestiae magnam at!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-discovery" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-sm-6">
            <div class="card h-100 pt-5">
                <p class="card-title text-center fw-semibold text-discovery">Dipak Adhikari</p>
                <img src="image/Bionic.jpg" class="card-img-top">
                <div class="card-body">
                    <div>
                        <p class="card-text text-center">CEO</p>
                    </div>
                    <div>
                        <p class="card-text text-center"><i class="fa-solid fa-circle-info hover_info" data-bs-toggle="modal" data-bs-target="#thipakModal"></i></p>
                    </div>
                    <div class="modal fade" tabindex="-1" id="thipakModal" aria-labelledby="thipakModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="thipakModalLabel" style="cursor:pointer">About Our CEO</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                With over a decade of experience in the U.S. as a software engineer, currently working as an IT Lead on support department of Bank of America, he brings a wealth of expertise in system reliability, security, and team leadership. His career reflects a strong commitment to innovation and problem-solving, skills he now leverages to provide top-tier technology solutions through his own business. Passionate about empowering clients with dependable and scalable tech solutions, he combines industry insight with a personalized approach to meet the unique needs of each project.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-discovery" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-sm-6">
            <div class="card h-100 pt-5">
                <p class="card-title text-center fw-semibold text-discovery">Roshan Neupane</p>
                <img src="image/Roshan.jpg" class="card-img-top">
                <div class="card-body">
                    <div>
                        <p class="card-text text-center">Cyber Security Specialist</p>
                    </div>
                    <div>
                        <p class="card-text text-center"><i class="fa-solid fa-circle-info hover_info" data-bs-toggle="modal" data-bs-target="#roshanModal"></i></p>
                    </div>
                    <div class="modal fade" tabindex="-1" id="roshanModal" aria-labelledby="roshanModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="roshanModalLabel" style="cursor:pointer">About Our Cyber Security Specialist</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero saepe adipisci, aliquam dolore blanditiis dolorum ad, perferendis quis rem quos, illum quod tenetur explicabo. Voluptatem placeat voluptatibus nobis sint ea? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, doloremque sapiente impedit reiciendis molestias alias, dolor cum dolores quas autem suscipit expedita ipsam iste tenetur architecto ab molestiae magnam at!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-discovery" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-sm-6">
            <div class="card h-100 pt-5">
                <p class="card-title text-center fw-semibold text-discovery">Nitin Utsav Bartaula</p>
                <img src="image/Nitin.jpg" class="card-img-top">
                <div class="card-body">
                    <div>
                        <p class="card-text text-center">Developer</p>
                    </div>
                    <div>
                        <p class="card-text text-center"><i class="fa-solid fa-circle-info hover_info" data-bs-toggle="modal" data-bs-target="#nitinModal"></i></p>
                    </div>
                    <div class="modal fade" tabindex="-1" id="nitinModal" aria-labelledby="nitinModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="nitinModalLabel" style="cursor:pointer">About Our Developer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero saepe adipisci, aliquam dolore blanditiis dolorum ad, perferendis quis rem quos, illum quod tenetur explicabo. Voluptatem placeat voluptatibus nobis sint ea? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, doloremque sapiente impedit reiciendis molestias alias, dolor cum dolores quas autem suscipit expedita ipsam iste tenetur architecto ab molestiae magnam at!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-discovery" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-sm-6">
            <div class="card h-100 pt-5">
                <p class="card-title text-center fw-semibold text-discovery">Suyog Sharma</p>
                <img src="image/Suyog.png" class="card-img-top">
                <div class="card-body">
                    <div>
                        <p class="card-text text-center">Developer</p>
                    </div>
                    <div>
                        <p class="card-text text-center"><i class="fa-solid fa-circle-info hover_info" data-bs-toggle="modal" data-bs-target="#suyogModal"></i></p>
                    </div>
                    <div class="modal fade" tabindex="-1" id="suyogModal" aria-labelledby="suyogModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="suyogModalLabel" style="cursor:pointer">About Our Developer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero saepe adipisci, aliquam dolore blanditiis dolorum ad, perferendis quis rem quos, illum quod tenetur explicabo. Voluptatem placeat voluptatibus nobis sint ea? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, doloremque sapiente impedit reiciendis molestias alias, dolor cum dolores quas autem suscipit expedita ipsam iste tenetur architecto ab molestiae magnam at!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-discovery" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
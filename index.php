<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thipaks</title>
    <style>
        /* Ensure full height of the screen */
        .container-fluid {
            position: relative;
            min-height: 100vh;
            /* Ensures it always takes the full viewport height */
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('image/parallex.jpg');
            /* background-image: url('image/parallex2.jpg'); */
            background-attachment: fixed;
            background-position: center;
            /* background-position: top; */
            background-repeat: no-repeat;
            background-size: cover;
            /* Ensures the image covers the entire container */
        }

        /* Overlay effect */
        .container-fluid::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        /* Center the text and button */
        .container-fluid>div {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }

        h1 {
            font-size: 3rem;
            margin: 0;
            padding: 0;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            border: none;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .button-link {
            color: white;
            text-decoration: none;
        }

        .colored-header {
            color: #9F8FEF !important;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        @media (max-width: 991px) {

            /* For tablets and small devices */
            .container-fluid {
                background-attachment: scroll;
                /* Change parallax behavior */
            }

            h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 575.98px) {

            /* Bootstrap's breakpoint for xs */
            .container-fluid {
                background-attachment: scroll;
                /* Prevents issues with fixed background */
                background-size: cover;
                /* Ensures full image coverage */
            }

            h1 {
                font-size: 2rem;
            }

            .btn {
                font-size: 1rem;
            }
        }

        /* Initial hidden state for fade-in effect */
        .fade-in {
            opacity: 0;
            transform: translateX(-100px);
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="container-fluid">
        <div>
            <h1 class="p-0 m-0">
                Problem Solving, Solution Finding, <span class="typing"></span>
            </h1>
            <button type="button" class="btn btn-discovery btn-sharp-thipaks" id="btn-big-thipaks">
                <a href="about.php" class="button-link">Learn More</a>
            </button>
        </div>
    </div>

    <div class="container" id="container-margin">
        <div class="row mb-3 pb-3 fade-in">
            <!-- Heading -->
            <h3 class="text-start">Innovative IT Solutions - Our Own Product</h3>

            <!-- Accordion Section -->
            <div class="col-lg-9 col-md-8 col-sm-6 left-side order-2 order-lg-1">
                <div class="accordion" id="accordionExample1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne1">
                            <button class="accordion-button colored-header" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                <h4>Customizable Solutions:</h4>
                            </button>
                        </h2>
                        <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>Our product adapts to your business needs, allowing you to configure features to suit
                                your unique workflows.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo1">
                            <button class="accordion-button colored-header collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false"
                                aria-controls="collapseTwo1">
                                <h4>User-friendly Interface:</h4>
                            </button>
                        </h2>
                        <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>Our product's interface is designed with simplicity in mind, reducing training time and
                                maximizing productivity.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Section - Appears below the heading and above the accordion on small screens -->
            <div
                class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-center order-1 order-sm-2 order-lg-2 mt-md-2">
                <img src="image/Inhouse.png" alt="Sample Image" class="img-fluid rounded" style="width: 300px;">
            </div>
        </div>


        <div class="row mb-3 pb-3 fade-in">
            <h3 class="text-end">Outsourcing Services for Optimized IT Management</h3>
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-center order-lg-1 order-1">
                <img src="image/Outsource.png" alt="Sample Image" class="img-fluid rounded hide-on-small"
                    style="width: 300px;">
            </div>
            <div class="col-lg-9 col-md-8 col-sm-6 order-lg-2 order-2">
                <div class="accordion" id="accordionExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne2">
                            <button class="accordion-button colored-header" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                <h4>Managed Services:</h4>
                            </button>
                        </h2>
                        <div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>We manage your IT systems, from monitoring and security to updates and backups,
                                providing you with peace of mind.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo2">
                            <button class="accordion-button colored-header collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false"
                                aria-controls="collapseTwo2">
                                <h4>Custom Development:</h4>
                            </button>
                        </h2>
                        <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>Need specialized software? Our team of developers can build custom solutions that cater
                                to your business needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3 fade-in">
            <h3 class="text-start">Collaborating with Industry Partners</h3>
            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-6 left-side order-lg-1 order-2">
                <div class="accordion" id="accordionExample3">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne3">
                            <button class="accordion-button colored-header" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                <h4>Access to Premium Tools:</h4>
                            </button>
                        </h2>
                        <div id="collapseOne3" class="accordion-collapse collapse show" aria-labelledby="headingOne3"
                            data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>Work with the best technologies in the market, thanks to our connections with leading
                                tech providers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo3">
                            <button class="accordion-button colored-header collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo3" aria-expanded="false"
                                aria-controls="collapseTwo3">
                                <h4>Tailored Solutions:</h4>
                            </button>
                        </h2>
                        <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo3"
                            data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>Our collaborations allow us to offer customized solutions that integrate seamlessly with
                                your existing infrastructure, ensuring that your IT strategy is both efficient and
                                effective.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-lg-3 col-md-4 col-sm-6 col-xs-6 order-lg-1 mt-md-2 d-flex justify-content-center align-items-center order-lg-2 order-sm-2 order-1">
                <img src="image/Collab.png" alt="Sample Image" class="img-fluid rounded hide-on-small"
                    style="width: 300px;">
            </div>
        </div>
    </div>



    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script>
        var typed = new Typed(".typing", {
            strings: ["Your Trusted Partner", "Empowering Your Vision"],
            typeSpeed: 100,
            backSpeed: 60,
            loop: true
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const fadeInSections = document.querySelectorAll('.fade-in');

            const options = {
                root: null, // Use the viewport as the root
                threshold: 0.1 // Trigger when 10% of the section is visible
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target); // Stop observing once the class is added
                    }
                });
            }, options);

            fadeInSections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>

</body>

</html>
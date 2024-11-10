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

        .quote {
            opacity: 0;
            clip-path: inset(0 50% 0 50%);
            /* Initially hide both sides */
            animation: fadeInExpand 3s forwards;
            /* Animation lasting 3 seconds */
        }

        @keyframes fadeInExpand {
            0% {
                opacity: 0;
                clip-path: inset(0 50% 0 50%);
                /* Hide both ends */
            }

            100% {
                opacity: 1;
                clip-path: inset(0);
                /* Reveal the full text */
            }
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

        #about {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease, transform 1s ease;
        }

        #about.fade-in {
            opacity: 1;
            transform: translateY(0);
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
        <div class="quote-container">
            <!-- <h1 class="p-0 m-0">
                Your IT, Our Artistry. <span class="typing"></span>
            </h1> -->
            <h1 class="p-0 m-0 quote">
                Your IT, Our Artistry. Transforming Tech, Transforming Business!
            </h1>
            <a href="#about" class="button-link">
                <button type="button" class="btn btn-discovery btn-sharp-thipaks" id="btn-big-thipaks">
                    Learn More
                </button>
            </a>

        </div>
    </div>

    <!--?php include 'index_services.php' ?-->

    <?php include 'about.php'; ?>

    <?php include 'our_services.php'; ?>

    <?php include 'our_partner.php'; ?>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <!-- <script>
        var typed = new Typed(".typing", {
            strings: ["Transforming Tech, Transforming Business!"],
            typeSpeed: 100,
            backSpeed: 60,
            loop: true
        });
    </script> -->

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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const aboutSection = document.getElementById("about");
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            aboutSection.classList.add("fade-in");
                            observer.unobserve(aboutSection); // Optional: Stop observing once faded in
                        }
                    });
                },
                { threshold: 0.1 } // Trigger when 10% of the section is visible
            );

            observer.observe(aboutSection);
        });
    </script>

    <script>
        document.getElementById('btn-big-thipaks').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default anchor jump
            const aboutSection = document.getElementById('about');
            const navbarHeight = document.querySelector('.navbar').offsetHeight; // Adjust for navbar height
            const extraOffset = 20; // Add extra space above the section

            // Scroll to the #about section, offset by the navbar height + extra spacing
            window.scrollTo({
                top: aboutSection.offsetTop - navbarHeight - extraOffset,
                behavior: 'smooth'
            });
        });

    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thipaks</title>

    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet"
        integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            font-family: "Rubik", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            
        }

        h1 {
            font-size: 2.5rem;
            /* 42.5px */
        }

        h2 {
            font-size: 2rem;
            /* 34px */
        }

        h3 {
            font-size: 1.75rem;
            /* 29.75px */
        }

        h4 {
            font-size: 1.5rem;
            /* 25.5px */
        }

        p {
            font-size: 1rem;
            /* 17px */
        }

        #container-margin {
            margin-top: 24px;
        }

        .margin-end {
            margin-bottom: 48px;
        }

        /* Replace the default blue hover color */
        .btn:hover {
            background-color: #9F8FEF;
            border-color: #9F8FEF;
        }

        /* Replace the default blue active color */
        .btn:active,
        .btn:focus {
            background-color: #9F8FEF;
            border-color: #9F8FEF;
        }

        /* Replace the default blue hover color for links */
        a,
        a:hover,
        a:focus {
            color: #9F8FEF;
        }

        a {
            font-size: 0.875rem;
        }

        a.without-link {
            text-decoration: none;
        }

        a.button-link {
            color: black;
            text-decoration: none;
        }

        /* Replace the default blue active color for links */
        a:active {
            color: #9F8FEF;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link:focus {
            color: #9F8FEF;
        }

        .navbar-nav .nav-link.active {
            color: #9F8FEF;
            background-color: transparent;
        }

        h1 {
            margin: 24px;
        }

        #btn-big-thipaks {
            padding: 15px;
        }

        .btn-sharp-thipaks {
            border-radius: 0 !important;
        }

        .custom-icon {
            color: #6E5DC6;
        }

        footer {
            margin-top: auto;
        }

        /*******************************************************************/
        /**Checkbox*/
        /*******************************************************************/
        .checkbox {
            opacity: 0;
            position: absolute;
        }

        .checkbox-label {
            background-color: #B6C2CF;
            width: 50px;
            height: 26px;
            border-radius: 50px;
            position: relative;
            padding: 5px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .fa-moon {
            color: #6E5DC6;
        }

        .fa-sun {
            color: #6E5DC6;
        }

        .checkbox-label .ball {
            background-color: #1D2125;
            width: 22px;
            height: 22px;
            position: absolute;
            left: 2px;
            top: 2px;
            border-radius: 50%;
            transition: transform 0.2s linear;
        }

        .checkbox:checked+.checkbox-label .ball {
            transform: translateX(24px);
        }

        /*  Support me if you like it */
        .support {
            position: absolute;
            right: 20px;
            bottom: 20px;
        }

        .support a {
            color: #292c35;
            font-size: 32px;
            backface-visibility: hidden;
            display: inline-block;
            transition: transform 0.2s ease;
        }

        .support a:hover {
            transform: scale(1.1);
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            h1 {
                font-size: 2.2rem;
            }

            /* 37.4px */
            h2 {
                font-size: 1.8rem;
            }

            /* 30.6px */
            h3 {
                font-size: 1.6rem;
            }

            /* 27.2px */
            h4 {
                font-size: 1.4rem;
            }

            /* 23.8px */
            p {
                font-size: 0.95rem;
            }

            /* 16.15px */
        }

        @media (max-width: 992px) {
            h1 {
                font-size: 2rem;
            }

            /* 34px */
            h2 {
                font-size: 1.6rem;
            }

            /* 27.2px */
            h3 {
                font-size: 1.4rem;
            }

            /* 23.8px */
            h4 {
                font-size: 1.2rem;
            }

            /* 20.4px */
            p {
                font-size: 0.9rem;
            }

            /* 15.3px */
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.8rem;
            }

            /* 30.6px */
            h2 {
                font-size: 1.5rem;
            }

            /* 25.5px */
            h3 {
                font-size: 1.3rem;
            }

            /* 22.1px */
            h4 {
                font-size: 1.1rem;
            }

            /* 18.7px */
            p {
                font-size: 0.85rem;
            }

            /* 14.45px */
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.5rem;
            }

            /* 25.5px */
            h2 {
                font-size: 1.3rem;
            }

            /* 22.1px */
            h3 {
                font-size: 1.2rem;
            }

            /* 20.4px */
            h4 {
                font-size: 1rem;
            }

            /* 17px */
            p {
                font-size: 0.8rem;
            }

            /* 13.6px */
        }
    </style>

    <script>
        const savedTheme = localStorage.getItem('theme') || 'dark'; // Default to 'dark' if no theme is saved
        document.documentElement.setAttribute('data-bs-theme', savedTheme);

        // Function to update the logo based on the theme
        function updateLogo(theme) {
            const logo = document.getElementById('logo-img');
            if (theme === 'light') {
                logo.src = 'image/thipaks light.png'; // Light theme logo
            } else {
                logo.src = 'image/thipaks dark.png';  // Dark theme logo
            }
        }
    </script>

</head>

<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    //echo $currentPage
    ?>
    <nav class="navbar navbar-expand-lg py-1">
        <div class="container py-1">
            <a class="navbar-brand" href="index.php"><img src="image/thipaks dark.png" id="logo-img"
                    style="width:150px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-2 ms-auto">
                    <a class="nav-link <?php echo $currentPage == 'index.php' ? 'active' : ''; ?>" aria-current="page"
                        href="index.php">Home</a>
                    <a class="nav-link <?php echo $currentPage == 'about.php' ? 'active' : ''; ?>"
                        href="about.php">About</a>
                    <a class="nav-link <?php echo $currentPage == 'contact.php' ? 'active' : ''; ?>"
                        href="contact.php">Contact</a>
                    <a class="nav-link <?php echo $currentPage == 'services.php' ? 'active' : ''; ?>"
                        href="services.php">Services</a>
                    <a class="nav-link <?php echo $currentPage == 'team.php' ? 'active' : ''; ?>" href="team.php">Team
                        Members</a>
                    <a class="nav-link <?php echo $currentPage == 'reviews.php' ? 'active' : ''; ?>"
                        href="reviews.php">Reviews</a>
                    <div class="d-flex align-items-center">
                        <input type="checkbox" class="checkbox" id="checkbox" onclick="toggleTheme()">
                        <label for="checkbox" class="checkbox-label">
                            <i class="fa-solid fa-sun"></i>
                            <i class="fas fa-moon"></i>
                            <span class="ball"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script>
        // Ensure the toggle button reflects the current theme on page load
        const themeToggle = document.getElementById('checkbox');
        if (savedTheme === 'light') {
            themeToggle.checked = true;
        }

        // Initialize the correct logo on page load
        updateLogo(savedTheme);

        function toggleTheme() {
            const htmlElement = document.documentElement;
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            // Set the new theme
            htmlElement.setAttribute('data-bs-theme', newTheme);

            // Update the logo based on the new theme
            updateLogo(newTheme);

            // Save the selected theme to localStorage
            localStorage.setItem('theme', newTheme);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
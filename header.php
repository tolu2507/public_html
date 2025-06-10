<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infinite 8 Hub</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap.style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="images/Infin8HUB Logo 1.png">

    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital,wght@0,400;0,700;1,400;1,700&family=Bebas+Neue&family=Monoton&family=Noto+Sans:ital,wdth,wght@0,62.5,100..900;1,62.5,100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="swiper.style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital,wght@0,400;0,700;1,400;1,700&family=Bebas+Neue&family=Monoton&family=Noto+Sans:ital,wdth,wght@0,62.5,100..900;1,62.5,100..900&family=Onest:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
</head>

<body>




    <nav class="navbar px-3 d-flex justify-content-center">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>

            <ul class="menu-items p-0 m-0">
                <li class="d-flex justify-content-center align-items-center" id="home-item"><a href="index.php" class="navbar-items navbar-active px-2 mx-2">Home</a></li>
                <!-- <li class="d-flex justify-content-center align-items-center"><a href="services.php" class="navbar-items px-2 mx-2">Services</a></li> -->

                <!-- <li class="nav-item d-flex align-items-center justify-content-center flex-column dropdown navbar-items"
                    onmouseover="openDropdown(this)" onmouseleave="closeDropdown(this)">
                    <a class="nav-link dropdown-toggle navbar-items" href="service.php" role="button">
                        Services
                    </a>
                    <ul class="dropdown-menu drop-down-custom drop-down-custom-desktop " style="width: 200px !important;">
                        <li class="my-1 pt-0"><a class="px-2 mx-2 navbar-items text-light" href="media&marketing.php">Media & Marketing</a></li>
                        <li class="my-1"><a class="px-2 mx-2 navbar-items text-light" href="etradingTechnology.php">E-Trading</a></li>
                        <li class="my-1"><a class="px-2 mx-2 navbar-items text-light" href="coascloud.php">Cloud Services</a></li>
                        <li class="my-1"><a class="px-2 mx-2 navbar-items text-light" href="costcontrol.php">Cost Control</a></li>
                        <li class="my-1"><a class="px-2 mx-2 navbar-items text-light" href="digitalmedia.php">Digital Media</a></li>
                    </ul>
                </li> -->
                <li class="nav-item d-flex align-items-center justify-content-center flex-column dropdown navbar-items">
                    <div class="m-0 p-0 d-flex align-items-center">
                        <!-- Services Link -->
                        <a class="nav-link navbar-items" href="services.php">
                            Services
                        </a>
                        <!-- Dropdown Arrow -->
                        <a class="nav-link dropdown-toggle navbar-items" href="#" id="dropdownArrow" style="margin-left: 8px;"></a>
                    </div>
                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu drop-down-custom" style="width: 200px !important;" id="dropdownMenu">
                        <li class="my-1 pt-0"><a class="px-2 mx-2 navbar-items text-light" href="media&marketing.php">Media & Marketing</a></li>
                        <li class="my-1"><a class="px-2 mx-2 navbar-items text-light" href="etradingTechnology.php">E-Trading</a></li>
                        <li class="my-1"><a class="px-2 mx-2 navbar-items text-light" href="coascloud.php">Cloud Services</a></li>
                        <li class="my-1"><a class="px-2 mx-2 navbar-items text-light" href="costcontrol.php">Cost Control</a></li>
                        <li class="my-1"><a class="px-2 mx-2 navbar-items text-light" href="digitalmedia.php">Digital Media</a></li>
                    </ul>
                </li>
                <li class="d-flex justify-content-center align-items-center"><a href="about.php" class="navbar-items px-2 mx-2">About</a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="contact.php" class="navbar-items btn-contact px-2 mx-2 contact-us-green">Contact us</a></li>
            </ul>
            <div class="navbar-image d-flex justify-content-end"><a href="index.php">
                <img src="images/Infin8HUB Logo 1.png" alt="" class="mx-2"
                        style="height: 65px; width: 65px"></a></div>
            <img src="images/Line 4.png" alt="" class="img-border-nav  mobile-hide m-0">
            <!-- <span class="mobile-allow-footer">
                <a href="index.php" class="navbar-image"><img src="images/Infin8HUB Logo 1.png" alt="" class="mx-2"
                        style="height: 100%"></a>
                <img src="images/Line 4.png" alt="" class="img-border-nav  mobile-hide m-0">
            </span> -->
        </div>
    </nav>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let currentPage = window.location.pathname.split("/").pop() || "index.php"; // Default to index.php if empty
            let navLinks = document.querySelectorAll(".navbar-items");

            navLinks.forEach(link => {
                let linkPage = link.getAttribute("href");

                link.classList.remove("navbar-active"); // Remove active class from all

                if (linkPage === currentPage) {
                    link.classList.add("navbar-active"); // Add active class to the matching link
                }
            });
        });



        document.addEventListener("DOMContentLoaded", function() {
            function updateContainerClass() {
                const navbarContainer = document.querySelector(".navbar-container");
                if (navbarContainer) {
                    if (window.innerWidth >= 1440) {
                        // if (window.innerWidth >= 1440 && window.innerWidth <= 1900) {
                        navbarContainer.classList.remove("container");
                    } else {
                        navbarContainer.classList.add("container");
                    }
                }
            }

            // Run on page load
            updateContainerClass();

            // Run on window resize
            window.addEventListener("resize", updateContainerClass);
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownItem = document.querySelector(".dropdown.navbar-items"); // Select entire li
            const dropdownMenu = document.getElementById("dropdownMenu");

            function isMobile() {
                return window.innerWidth < 767;
            }

            dropdownItem.addEventListener("mouseenter", function() {
                if (!isMobile()) {
                    dropdownMenu.classList.add("show"); // Open dropdown on hover
                }
            });

            dropdownItem.addEventListener("mouseleave", function() {
                if (!isMobile()) {
                    dropdownMenu.classList.remove("show"); // Close dropdown when mouse leaves
                }
            });

            // Close dropdown when clicking outside (for non-mobile users)
            document.addEventListener("click", function(event) {
                if (!dropdownItem.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.remove("show");
                }
            });
        });
    </script>
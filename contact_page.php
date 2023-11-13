<?php

session_start();
if (!isset($_SESSION["username"])) {
    // Redirect to the login page if not logged in
    header("Location: index.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Contact information</title>

    <!-- Reference to the css files -->
    <link rel="stylesheet" href="./css/contact-style.css">
    <link rel="stylesheet" href="./css/menu-style.css">

    <!-- Reference to the icons used in this document -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />




</head>

<body>
    <!-- Section 1 : the menu bar -->

    <div class="row" id="header">

        <div id="dropdown-menu">
            <span>MENU</span>
            <div class="dropdown-content">
                <ul>
                    <!-- Reference to our Home page -->
                    <a href="home.php">
                        <li>Home</li>
                    </a>

                    <!-- Reference to our Resume page -->
                    <a href="resume.php">
                        <li>Resume</li>
                    </a>

                    <!-- Reference to our Vision Board page -->
                    <a href="image-gallery.php">
                        <li>Vision Board</li>
                    </a>

                    <!-- Reference to our Contact Info page -->
                    <a href="contact_page.php">
                        <li>Contact Us</li>
                    </a>

                </ul>
            </div>
        </div>
        <!-- Welcome message and logout button -->
        <div class="logout">
            <?php

            echo 'Welcome, ' . $_SESSION["username"] . '!   <span > <a class="logBtn" href="./BE/logout.php">Logout</a></span>';

            ?>
        </div>
    </div>


    <!-- Section 2 : Container (added for better division of content) -->
    <div class="container">

        <!-- Content Div that would have an inline block display -->
        <div class="content">

            <!-- Left content : that is the text part -->
            <div class="leftContent">
                <!-- Title -->
                <h1 id="title">Let's Talk</h1>

                <!-- Contact section -->
                <h3 class="title">Contact</h3>
                <div class="interest"><i class="fa-solid fa-location-dot icons"></i>
                    <p class="description">Beirut, Lebanon</p>
                </div>

                <div class="interest"><i class="fa-solid fa-phone-volume icons"></i>
                    <p class="description">+961 76 821 045</p>
                </div>

                <div class="interest"><i class="fa-solid fa-envelope icons"></i>
                    <p class="description" id="lastLine">maria.barada@lau.edu</p>
                </div>

                <!-- Socials section -->
                <h3 class="title">Socials</h3>
                <div class="interest"><i class="fa-brands fa-linkedin icons"></i>
                    <p class="description">maria.barada</p>
                </div>
                <div class="interest"><i class="fa-brands fa-github icons"></i>
                    <p class="description">mariabarada</p>
                </div>
            </div>

            <!-- Right content : that is the photo part -->
            <div class="rightContent">
                <img src="./images/Background (7).png" alt="">
            </div>




        </div>

    </div>



</body>

</html>
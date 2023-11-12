



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./css/menu-style.css">

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
            session_start();
            // Check if the user is logged in
            if (isset($_SESSION["username"])) {
                echo 'Welcome, ' . $_SESSION["username"] . '!   <span > <a class="logBtn" href="./BE/logout.php">Logout</a></span>';
            } else {
                // Redirect to the login page if not logged in
                header("Location: index.php");
                exit;
            }
            ?>
        </div>
        </div>
        </div>



</body>

</html>
<!-- image-gallery.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Vision Board</title>
    <link rel="stylesheet" href="./css/gallery-style.css">
    <link rel="stylesheet" href="./css/menu-style.css">
</head>

<body>

    <!-- Page Header -->
    <div class="row" id="header">
        <div id="dropdown-menu">
            <span>MENU</span>
            <div class="dropdown-content">
                <ul>
                    <a href="home.php">
                        <li>Home</li>
                    </a>
                    <a href="resume.php">
                        <li>Resume</li>
                    </a>
                    <a href="image-gallery.php">
                        <li>Vision Board</li>
                    </a>
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

    <!-- Image Gallery: Display images dynamically -->
    <div class="img-frame">
        <?php
        // Path to the gallery JSON file
        $galleryPath = "data/gallery.json";

        // Read JSON file
        $galleryData = file_get_contents($galleryPath);
        $galleryImages = json_decode($galleryData, true);

        $counter = 0;

        // Output HTML for the image gallery
        foreach ($galleryImages as $image) :
            $counter++;
        ?>
            <a href="#item<?= $image ?>">
                <img src="./images/<?= $image ?>" class="my-img">
            </a>
            <?php
        // Add a line break after the third image
        if ($counter % 3 == 0) {
            echo "<br> <br> <br> <br>";
        }
        ?>
        <?php endforeach; ?>
    </div>

    <!-- Lightboxes for images -->
    <?php foreach ($galleryImages as $image) : ?>
        <div class="lightbox" id="item<?= $image ?>">
            <div class="lightbox__content">
                <a href="#" class="close"></a>
                <img class="lightbox__image" src="./images/<?= $image ?>" alt="">
            </div>
        </div>
    <?php endforeach; ?>

</body>

</html>

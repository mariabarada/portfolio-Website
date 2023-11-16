<?php
session_start();

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Loading the user data from JSON file
    $file_path = "../data/users.json";
    $current_data = file_get_contents($file_path);
    $users = json_decode($current_data, true);

    // Check if the user already exists (has signedup before)
    $user_exists = false;
    foreach ($users as $user) {
        if ($user["username"] === $username && password_verify($password, $user["password"])) {
            // when user is found, set the session variable
            $_SESSION["username"] = $username;
            $user_exists = true;
            break;
        }
    }


    // If user was found --> go to home page (successful login)
    if ($user_exists) {
        // Redirect to a secure page after successful login
        header("Location: ../home.php");
        exit;
    } else {   // User not found
        // User not found/ incorrect password --> Redirect to login page
        header("Location: ../index.php?error=1");
        exit;
    }

?>

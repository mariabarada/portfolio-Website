<?php
session_start();

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Load user data from JSON file
    $file_path = "../data/users.json";
    $current_data = file_get_contents($file_path);
    $users = json_decode($current_data, true);

    // Check if the user exists
    $user_exists = false;
    foreach ($users as $user) {
        if ($user["username"] === $username && password_verify($password, $user["password"])) {
            // User found, set session variable or perform other login actions
            $_SESSION["username"] = $username;
            $user_exists = true;
            break;
        }
    }

    if ($user_exists) {
        // Redirect to a secure page after successful login
        header("Location: ../index.html");
        exit;
    } else {
        // User not found or incorrect password, handle accordingly (display error or redirect)
        header("Location: ../index.php?error=1");
        exit;
    }

?>

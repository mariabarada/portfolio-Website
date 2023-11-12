<?php

    $username = $_POST["Username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $sex = $_POST["sex"];
    $dob = $_POST["dbo"];

    // Create an array with user data
    $user_data = [
        "username" => $username,
        "firstname" => $firstname,
        "lastname" => $lastname,
        "password" => $password,
        "sex" => $sex,
        "dob" => $dob,
    ];

    // Load existing user data
    $file_path = "../data/users.json";
    $current_data = file_get_contents($file_path);
    $users = json_decode($current_data, true);

    // Check if the username is already taken
    foreach ($users as $user) {
        if ($user["username"] === $username) {
            // Handle username already taken (redirect or display an error)
            echo '<script>alert("Username is already taken. Please choose another username.");</script>';
            echo '<script>window.location.href="../signup.html";</script>';
            // header("Location: ../signup.html?error=1");
            exit;
        }
    }

    // Add the new user data to the array
    $users[] = $user_data;

    // Save the updated user data to the file
    $json_data = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents($file_path, $json_data);

    // Redirect to login page or another destination
    header("Location: ../index.php");
    exit;

?>

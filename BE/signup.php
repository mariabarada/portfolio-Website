<?php


    //  Info submitted in the form
    $username = $_POST["Username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $sex = $_POST["sex"];
    $dob = $_POST["dbo"];

    // Array having the user data
    $user_data = [
        "username" => $username,
        "firstname" => $firstname,
        "lastname" => $lastname,
        "password" => $password,
        "sex" => $sex,
        "dob" => $dob,
    ];

    // Load existing user data from my json file
    $file_path = "../data/users.json";
    $current_data = file_get_contents($file_path);
    $users = json_decode($current_data, true);

    // Check if the username is already taken (since I want the username to be unique for each user)
    foreach ($users as $user) {
        if ($user["username"] === $username) {
            // if username was found in my json file--> toast message for the user to change the username, and redirect to signup page
            echo '<script>alert("Username is already taken. Please choose another username.");</script>';
            echo '<script>window.location.href="../signup.html";</script>';
            exit;
        }
    }

    // If we reach this script --> successful signUp --> SHOULD STORE USER DATA IN A THE JSON FILE
    $users[] = $user_data;

    // Save the user data to the file
    $json_data = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents($file_path, $json_data);

    // Redirect to login page so that the user could login into the website 
    header("Location: ../index.php");
    exit;

?>

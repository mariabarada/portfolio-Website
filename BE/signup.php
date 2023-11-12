
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract user data from the form
    $username = $_POST["Username"];
    $fullname = $_POST["firstname"] . " " . $_POST["lastname"];
    $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $sex = $_POST["sex"];
    $dob = $_POST["dbo"];

    // Create an array with user data
    $user_data = [
        "username" => $username,
        "fullname" => $fullname,
        "password" => $password,
        "sex" => $sex,
        "dob" => $dob,
    ];

    // Save user data to a file (choose JSON, CSV, or text)
    $file_path = "../data/users.json"; // Change the file extension as needed
    $current_data = file_get_contents($file_path);
    $users = json_decode($current_data, true);
    $users[] = $user_data;
    $json_data = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents($file_path, $json_data);

    // Redirect to login page or handle accordingly
    header("Location: ../signup.html");
}
?>

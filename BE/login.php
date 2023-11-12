
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $file_path = "../data/users.json"; // Change the file extension as needed
    $current_data = file_get_contents($file_path);
    $users = json_decode($current_data, true);

    // Check if the user exists
    foreach ($users as $user) {
        if ($user["username"] === $username && password_verify($password, $user["password"])) {
            // Set a session variable to indicate a successful login
            session_start();
            $_SESSION["username"] = $username;
            header("Location: ../index.html"); // Redirect to the dashboard or another protected page
            exit;
        }
    }

    // Handle unsuccessful login (e.g., redirect to login page with an error message)
    header("Location: ../index.php?error=1");
}
?>

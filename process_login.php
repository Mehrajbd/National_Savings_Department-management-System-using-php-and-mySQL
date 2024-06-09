<?php
require_once('databases.php');

// Start session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];

    // Validate credentials (Example query, adjust according to your database schema)
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Set session variables or other login success logic
        $_SESSION['user'] = $email;

        // Redirect to a successful login page
        header("Location: success.php");
        exit();
    } else {
        // Redirect back to login with error (or handle error display)
        header("Location: login.php?error=invalid_credentials");
        exit();
    }
}

// Close the database connection
mysqli_close($connection);
?>

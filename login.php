<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="login-form">
        <h2 class="text-center">Login</h2>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
        </form>
    </div>
</div>


<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Make sure there's no output before session_start()
if (!headers_sent()) {
    session_start();
}

// Check if the user is already logged in
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // If logged in, redirect to welcome page
    header("location: index.php");
    exit;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set and not empty
    if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        // Dummy credentials for demonstration
        $dummy_username = "user";
        $dummy_password = "password";

        // Check if the entered credentials match the dummy credentials
        if ($_POST["username"] === $dummy_username && $_POST["password"] === $dummy_password) {
            // Authentication successful, set session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $dummy_username;

            // Redirect to welcome page
            header("location: welcome.php");
            exit;
        } else {
            // Authentication failed, redirect back to login page with error message
            header("location: index.php?error=invalid_credentials");
            exit;
        }
    } else {
        // Username or password is empty, redirect back to login page with error message
        header("location: index.php?error=empty_fields");
        exit;
    }
}
?>
</body>
</html>
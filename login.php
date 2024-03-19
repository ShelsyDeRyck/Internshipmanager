<?php
session_start();

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
} else {
    // If the form is not submitted, redirect back to login page
    header("location: index.php");
    exit;
}
?>
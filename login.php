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

// Database credentials
$servername = "localhost";
$username = "root";
$passw = "root";
$database = "internship";

// Create connection
$conn = new mysqli($servername, $username, $passw, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
    // Check if password is set and not empty
    if (isset($_POST["password"]) && !empty($_POST["password"] && $_POST["username"] && !empty($_POST["username"]))) {
        // Prepare a statement
        $stmt = $conn->prepare("SELECT user_id, CONCAT(firstname, '_', lastname) AS username,adminBool FROM users WHERE password=? AND CONCAT(firstname, '_', lastname) =?");
        $stmt->bind_param("ss", $password, $username);

        // Set parameters and execute
        $user = $_POST["username"];
        $password = $_POST["password"];
        $stmt->execute();
        $stmt->store_result();

        // Check if user exists
        if ($stmt->num_rows == 1) {
            // Authentication successful, fetch the username
            $stmt->bind_result($user_id, explode("_", $username)[0], explode("_", $username)[1]);
            $stmt->fetch();

            // Set session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;

            // Redirect to welcome page
            header("location: welcome.php");
            exit;
        } else {
            // Authentication failed, redirect back to login page with error message
            header("location: index.php?error=invalid_credentials");
            exit;
        }
    } else {
        // Password is empty, redirect back to login page with error message
        header("location: index.php?error=empty_password");
        exit;
    }
}
// $conn->close();
?>
</body>
</html>
<?php include "global.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="container">
    <div class="login-form">
        <h2 class="text-center">Login</h2>
        <form action="" method="post">
            <div class="form-group mb-2">
                <input type="text" name="username" class="form-control" placeholder="Username" required="required">
            </div>
            <div class="form-group mb-2">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-danger btn-block">Log in</button>
            </div>
        </form>
    </div>
</div>


<?php
// Enable error reporting
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// // Make sure there's no output before session_start()
// session_start();

// // Check if the user is already logged in
// if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
//     // If logged in, redirect to welcome page
//     header("location: index.php");
//     exit;
// }

// // Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Check if password is set and not empty
//     if (isset($_POST["password"]) && !empty($_POST["password"] && $_POST["username"] && !empty($_POST["username"]))) {
//         // Prepare a statement
//         $stmt = $conn->prepare("SELECT user_id, CONCAT(firstname, '_', lastname) AS username,adminBool FROM users WHERE password=? AND CONCAT(firstname, '_', lastname) =?");
//         $stmt->bind_param("ss", $password, $username);

//         // Set parameters and execute
//         $user = $_POST["username"];
//         $password = $_POST["password"];
//         $stmt->execute();
//         $stmt->store_result();

//         // Check if user exists
//         if ($stmt->num_rows == 1) {
//             // Authentication successful, fetch the username
//             $stmt->bind_result($user_id, explode("_", $username)[0], explode("_", $username)[1]);
//             $stmt->fetch();

//             // Set session variables
//             $_SESSION["loggedin"] = true;
//             $_SESSION["username"] = $username;

//             // Redirect to welcome page
//             header("location: welcome.php");
//             exit;
//         } else {
//             // Authentication failed, redirect back to login page with error message
//             header("location: index.php?error=invalid_credentials");
//             exit;
//         }
//     } else {
//         // Password is empty, redirect back to login page with error message
//         header("location: index.php?error=empty_password");
//         exit;
//     }
// }
// $conn->close();
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script> src='script.js'</script>
</body>
</html>
<?php
    $conn = mysqli_connect("localhost", "root", "root", "internship");
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    function checkLoggedIn() {
        if (!isset($_SESSION['token'])) {
            header('Location: login.php');
            exit;
        }
    }
?>
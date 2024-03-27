<?php
// Replace with your database connection details
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$nameErr = $emailErr = $loginErr = $passwordErr = $phoneErr = $addressErr = $courseErr = "";
$name = $email = $username = $password = $phone = $address = $course_id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate all user inputs
  // ... (same validation logic from previous example)

  if (empty($nameErr) && empty($emailErr) && empty($loginErr) && empty($passwordErr) && empty($phoneErr) && empty($addressErr) && empty($courseErr)) {
    // Prepare SQL insert statement
    $sql = "INSERT INTO teachers (name, email, username, password, phone_number, address, course_id) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
      // Hash password before inserting
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      
      mysqli_stmt_bind_param($stmt, "sssssss", $name, $email, $username, $hashed_password, $phone, $address, $course_id);
      mysqli_stmt_execute($stmt);

      echo "Teacher added successfully!";
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
  }
}

mysqli_close($conn);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Teacher</title>
  <style>
    .error {
      color: red;
      font-size: smaller;
    }
  </style>
</head>
<body>
  <h2>Add Teacher</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required value="<?php echo $email; ?>">
    <span class="error">* <?php echo $emailErr; ?></span><br><br>

    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required value="<?php echo $username; ?>">
    <span class="error">* <?php echo $loginErr; ?></span><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <span class="error">* <?php echo $passwordErr; ?></span><br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" name="phone" id="phone" required value="<?php echo $phone; ?>">
    <span class="error">* <?php echo $phoneErr; ?></span><br><br>

    <label for="address">Address:</label>
    <textarea name="address" id="address" required><?php echo $address; ?></textarea>
    <span class="error">* <?php echo $addressErr; ?></span><br><br>

    <label for="course_id">Course:</label>
    <select name="course_id

<?php

// Database connection details (replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data (if submitted)
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : '';
$course_id = isset($_POST['course_id']) ? (int)$_POST['course_id'] : null; // Cast to integer for security

// Prepare and execute SQL statement with parameterized query for security
if (!empty($name) && !empty($firstname) && !empty($course_id)) {
  $sql = "INSERT INTO students (name, firstname, course_id) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $name, $firstname, $course_id);
  $stmt->execute();

  if ($stmt->affected_rows === 1) {
    echo "Student added successfully!";
  } else {
    echo "Error adding student: " . $conn->error;
  }

  $stmt->close();
} else {
  echo "Please fill out all required fields.";
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Student</title>
</head>
<body>
  <h1>Add Student</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br><br>
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" id="firstname" required><br><br>
    <label for="course_id">Course ID:</label>
    <input type="number" name="course_id" id="course_id" required><br><br>
    <input type="submit" value="Add Student">
  </form>
</body>
</html>

<?php

// Replace with your connection credentials
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$studentId = $_GET["id"]; // Assuming student ID is passed in the URL parameter "id"

// Get existing student data (optional, for pre-filling the form)
$sql = "SELECT name, first_name, course_id FROM students WHERE id = $studentId";
$result = $conn->query($sql);

$student = null;
if ($result->num_rows > 0) {
  $student = $result->fetch_assoc();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $newName = $_POST["name"];
  $newFirstName = $_POST["first_name"];
  $newCourseId = $_POST["course_id"];

  // Update student data
  $sql = "UPDATE students SET name='$newName', first_name='$newFirstName', course_id=$newCourseId WHERE id=$studentId";

  if ($conn->query($sql) === TRUE) {
    echo "Student record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Student</title>
</head>
<body>
  <?php if ($student != null) : ?>
  <h1>Edit Student (ID: <?php echo $student["id"]; ?>)</h1>
  <form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $student["name"]; ?>">
    <br><br>
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" id="first_name" value="<?php echo $student["first_name"]; ?>">
    <br><br>
    <label for="course_id">Course ID:</label>
    <input type="number" name="course_id" id="course_id" value="<?php echo $student["course_id"]; ?>">
    <br><br>
    <button type="submit">Update Student</button>
  </form>
  <?php else : ?>
    <p>Student with ID <?php echo $studentId; ?> not found.</p>
  <?php endif; ?>
</body>
</html>


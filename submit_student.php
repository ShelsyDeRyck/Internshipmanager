<?php
// Include your database connection file or logic here
// Assuming you have a function called connectToDatabase() that returns a connection

// No need for separate processing here, handled in add_student.php using POST request

header("Location: add_student.php");  // Redirect back to add_student.php after processing
exit;

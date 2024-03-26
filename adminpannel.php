<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin pannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<?php
// Dummy data for courses
$courses = [
    ['id' => 1, 'name' => 'Math'],
    ['id' => 2, 'name' => 'Science'],
    ['id' => 3, 'name' => 'History']
];

// Dummy data for students
$students = [
    ['id' => 1, 'name' => 'John Doe', 'course_id' => 1],
    ['id' => 2, 'name' => 'Jane Smith', 'course_id' => 1],
    ['id' => 3, 'name' => 'Michael Johnson', 'course_id' => 2],
    ['id' => 4, 'name' => 'Emily Brown', 'course_id' => 2],
    ['id' => 5, 'name' => 'David Wilson', 'course_id' => 3]
];

// Dummy data for teachers
$teachers = [
    ['id' => 1, 'name' => 'John Smith', 'email' => 'john@example.com', 'login' => 'john', 'password' => 'password1', 'address' => '123 Main St', 'phone' => '555-1234'],
    ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@example.com', 'login' => 'jane', 'password' => 'password2', 'address' => '456 Elm St', 'phone' => '555-5678'],
    ['id' => 3, 'name' => 'Michael Johnson', 'email' => 'michael@example.com', 'login' => 'michael', 'password' => 'password3', 'address' => '789 Oak St', 'phone' => '555-9101']
];

// Dummy data for teacher-course relationships
$teacher_courses = [
    ['teacher_id' => 1, 'course_id' => 1],
    ['teacher_id' => 1, 'course_id' => 2],
    ['teacher_id' => 2, 'course_id' => 3],
    ['teacher_id' => 3, 'course_id' => 1],
    ['teacher_id' => 3, 'course_id' => 3]
];
?>


<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm">
            <a class="navbar-brand h1" href="#">Admin pannel</a>
            <hr color="grey">
            </div>
            <div class="col-md">
            <ul class="nav nav-tabs justify-content-end" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-tab-pane" type="button" role="tab" aria-controls="login-tab-pane" aria-selected="true">Login</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses-tab-pane" type="button" role="tab" aria-controls="courses-tab-pane" aria-selected="false">Courses</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="teachers-tab" data-bs-toggle="tab" data-bs-target="#teachers-tab-pane" type="button" role="tab" aria-controls="teachers-tab-pane" aria-selected="false">Teachers</button>
                  <!-- add course to teacher  -->
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="students-tab" data-bs-toggle="tab" data-bs-target="#students-tab-pane" type="button" role="tab" aria-controls="students-tab-pane" aria-selected="false">Students</button>
                    <!-- <textarea name="" id="" cols="3" rows="5"></textarea> -->
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login-tab-pane" role="tabpanel" aria-labelledby="login-tab" tabindex="0">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime animi nihil ea, at ad fuga soluta culpa accusantium voluptatibus necessitatibus quas doloremque consequuntur suscipit a iste accusamus. A, officiis quod?</h2>
                </div>
                <div class="tab-pane fade" id="courses-tab-pane" role="tabpanel" aria-labelledby="courses-tab" tabindex="0">
                <?php foreach ($courses as $course): ?>
  <h3><?php echo $course['name']; ?></h3>
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton_<?php echo $course['id']; ?>" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Students
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_<?php echo $course['id']; ?>">
      <?php foreach ($students as $student): ?>
        <?php if ($student['course_id'] == $course['id']): ?>
          <a class="dropdown-item" href="#"><?php echo $student['name']; ?></a>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
<?php endforeach; ?>
</div>

<div class="tab-pane fade" id="teachers-tab-pane" role="tabpanel" aria-labelledby="teachers-tab" tabindex="0">
<?php foreach ($teachers as $teacher): ?>
  <h3><?php echo $teacher['name']; ?></h3>

  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="teacherDropdown_<?php echo $teacher['id']; ?>" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Teacher Details
    </button>
    <div class="dropdown-menu" aria-labelledby="teacherDropdown_<?php echo $teacher['id']; ?>">
      <p>Email: <?php echo $teacher['email']; ?></p>
      <p>Login: <?php echo $teacher['login']; ?></p>
      <p>Password: <?php echo $teacher['password']; ?></p> <p>Address: <?php echo $teacher['address']; ?></p>
      <p>Phone: <?php echo $teacher['phone']; ?></p>
      <p>Courses Taught:</p>
      <ul>
        <?php foreach ($teacher_courses as $relation): ?>
          <?php if ($relation['teacher_id'] == $teacher['id']): ?>
            <?php foreach ($courses as $course): ?>
              <?php if ($course['id'] == $relation['course_id']): ?>
                <li><?php echo $course['name']; ?></li>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

<?php endforeach; ?>

</div>
<div class="tab-pane fade" id="students-tab-pane" role="tabpanel" aria-labelledby="students-tab" tabindex="0">
  <a href="add_student.php" class="btn btn-primary mb-3">Add Student</a>
  <a href="edit_students.php" class="btn btn-secondary mb-3">Edit Students</a>  <?php foreach ($students as $student): ?>
    <h3><?php echo $student['name']; ?></h3>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="studentDropdown_<?php echo $student['id']; ?>" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Details
      </button>
      <div class="dropdown-menu" aria-labelledby="studentDropdown_<?php echo $student['id']; ?>">

        <?php // Find course name based on student's course_id ?>
        <?php
          $courseName = "";
          foreach ($courses as $course) {
            if ($course['id'] == $student['course_id']) {
              $courseName = $course['name'];
              break; // Exit the loop after finding the course
            }
          }
        ?>

        <?php // Find teacher name(s) based on student's course_id and teacher_courses ?>
        <?php
          $teachers = array();
          foreach ($teacher_courses as $relation) {
            if ($relation['course_id'] == $student['course_id']) {
              $teacherId = $relation['teacher_id'];
              foreach ($teachers as $teacher) {
                if ($teacher['id'] == $teacherId) {
                  continue 2; // Skip adding duplicate teacher names
                }
              }
              $teacherName = "";
              foreach ($teachers as $teacher) {
                if ($teacher['id'] == $teacherId) {
                  $teacherName = $teacher['name'];
                  break;
                }
              }
              if (!empty($teacherName)) {
                $teachers[] = array('id' => $teacherId, 'name' => $teacherName);
              }
            }
          }
        ?>

        <p>Course: <?php echo $courseName; ?></p>

        <?php if (!empty($teachers)): ?>
          <p>Teacher(s):</p>
          <ul>
            <?php foreach ($teachers as $teacher): ?>
              <li><?php echo $teacher['name']; ?></li>
            <?php endforeach; ?>
          </ul>
        <?php else: ?>
          <p>No teacher information available.</p>
        <?php endif; ?>
      </div>
    </div>

  <?php endforeach; ?>
</div>



                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script> src='script.js'</script>
</body>
</html>
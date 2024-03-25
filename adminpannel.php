<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin pannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>


<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses-tab-pane" type="button" role="tab" aria-controls="courses-tab-pane" aria-selected="false">Courses</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="teachers-tab" onclick='resetPass()' data-bs-toggle="tab" data-bs-target="#teachers-tab-pane" type="button" role="tab" aria-controls="teachers-tab-pane" aria-selected="false">Teachers</button>
                  <!-- add course to teacher  -->
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="softskills-tab" data-bs-toggle="tab" data-bs-target="#softskills-tab-pane" type="button" role="tab" aria-controls="softskills-tab-pane" aria-selected="false">Softskills</button>
                    <!-- <textarea name="" id="" cols="3" rows="5"></textarea> -->
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="hardskills-tab" data-bs-toggle="tab" data-bs-target="#hardskills-tab-pane" type="button" role="tab" aria-controls="hardskills-tab-pane" aria-selected="true">Hardskills</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="courses-tab-pane" role="tabpanel" aria-labelledby="courses-tab" tabindex="0">
                    <!-- <form class="mb-3 mt-2 " id="courseForm" method="post" target="_blank">
                        <div class="mb-3 mt-2 ">
                            <label for="courseInput" class="form-label">Add course</label>
                            <input type="text" class="form-control" id="courseInput" placeholder="coursename">
                        </div>
                        <div class="mb-3">
                            <label for="courseDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="courseDescription" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form> -->

                    <form class="mb-4 mt-2 p-4 shadow-sm rounded" id="courseForm" method="post" target="_blank" style="background-color: #ffffff; color: #ff0000;">
                        <div class="mb-3">
                            <label for="courseInput" class="form-label fs-5">Course Name</label>
                            <input type="text" class="form-control" id="courseInput" placeholder="Enter course name">
                        </div>
                        <div class="mb-3">
                            <label for="courseDescription" class="form-label fs-5">Description</label>
                            <textarea class="form-control" id="courseDescription" rows="3" placeholder="Enter course description"></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-danger btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="teachers-tab-pane" role="tabpanel" aria-labelledby="teachers-tab" tabindex="0">
                    <form class="mb-4 mt-2 p-4 shadow-sm rounded" id="teacherForm" method="post" target="_blank" style="background-color: #ffffff; color: #ff0000;">
                        <div class="mb-3">
                            <label for="teacherFirstName" class="form-label fs-5">First name</label>
                            <input type="text" class="form-control" id="teacherFirstName" placeholder="first name">
                        </div>
                        <div class="mb-3">
                            <label for="teacherLastName" class="form-label fs-5">Last name</label>
                            <input type="text" class="form-control" id="teacherLastName" placeholder="last name">
                        </div>
                        <div class="mb-3">
                            <label for="teacherPass" class="form-label fs-5">Password</label>
                            <input class="form-control" type="text" id="teacherPass" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="switchAdmin">
                            <label class="form-check-label" for="switchAdmin">Admin rights</label>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-danger btn-lg" onclick="resetPass()">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="softskills-tab-pane" role="tabpanel" aria-labelledby="sofftskills-tab" tabindex="0">
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                </div>
                <div class="tab-pane fade" id="hardskills-tab-pane" role="tabpanel" aria-labelledby="hardskills-tab" tabindex="0">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime animi nihil ea, at ad fuga soluta culpa accusantium voluptatibus necessitatibus quas doloremque consequuntur suscipit a iste accusamus. A, officiis quod?</h2>
                </div>
            </div>

            </div>
            <div class="col-sm adminpannelTitle" >
            <a class="navbar-brand h1" href="#">Admin pannel</a>
            <hr color="#dee2e6">
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
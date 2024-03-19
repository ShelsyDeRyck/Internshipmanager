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
                <button class="nav-link" id="teachers-tab" data-bs-toggle="tab" data-bs-target="#teachers-tab-pane" type="button" role="tab" aria-controls="teachers-tab-pane" aria-selected="false">teachers</button>
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
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                </div>
                <div class="tab-pane fade" id="teachers-tab-pane" role="tabpanel" aria-labelledby="teachers-tab" tabindex="0">
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque commodi amet odio sed. Illum iure, amet quas sed aliquam placeat consequuntur, voluptatem recusandae animi, odit ea in vitae eveniet ab.</h4>
                </div>
                <div class="tab-pane fade" id="students-tab-pane" role="tabpanel" aria-labelledby="students-tab" tabindex="0">
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script> src='script.js'</script>
</body>
</html>
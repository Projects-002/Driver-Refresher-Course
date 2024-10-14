<?php

session_start();
if(!isset($_SESSION['user'])){
    header('location: index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <!-- Header -->
        <header class="dashboard-header bg-success text-white text-center p-3">
            <h1>Welcome to the User Dashboard</h1>
            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="courses.php">Courses</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Assessments</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Feedback</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Profile</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Logout</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main Dashboard Section -->
        <section class="dashboard-main row mt-4">
            <!-- Courses Section -->
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h2>Your Courses</h2>
                    </div>
                    <div class="card-body">
                        <div class="course-card mb-3">
                            <h3>Pre-Licensing Course(Mandatory)</h3>
                            <!-- <p>Progress: 70%</p> -->
                           <a href="license.php"><button class="btn btn-success">Continue Course</button></a>
                        </div>
                        <div class="course-card">
                            <h3>Defensive driving Course</h3>
                            <!-- <p>Progress: 40%</p> -->
                            <button class="btn btn-success">Continue Course</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Assessments Section -->
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h2>Pending Assessments</h2>
                    </div>
                    <div class="card-body">
                        <div class="assessment-card">
                            <h3>Assessment 1</h3>
                            <p>Due Date: 15th Oct 2024</p>
                            <button class="btn btn-primary">Take Assessment</button>
                        </div>
                        <div class="assessment-card">
                            <h3>Assessment 2</h3>
                            <p>Due Date: 20th Oct 2024</p>
                            <button class="btn btn-primary">Take Assessment</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript for Responsive Features -->
    <script>
        // Add additional interactivity or dynamic responsiveness with JavaScript if necessary
        window.onload = function () {
            console.log("Page loaded successfully!");
            // You can add JavaScript logic to enhance dashboard functionality if needed.
        }
    </script>
</body>
</html>

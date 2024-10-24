<?php

session_start();
if(!isset($_SESSION['user'])){
    header('location: index.php');
}



include('database/db.php');

   $sn = $_GET['uid'];


//    Check whether the user has done the assessment already!


// Read Drivers id
     $driver = "SELECT * FROM Drivers where SN = $sn";
     $feed = mysqli_query($conn, $driver);
     $get_id = mysqli_fetch_assoc($feed);
     $D_id = $get_id["Id_No"];
     $f_name = $get_id['First_Name'];
     $l_name = $get_id['Last_Name'];


 
    // $user = mysqli_fetch_assoc($result)

    $responses = "SELECT * FROM Responses where Id_Num = $D_id";
    $result = mysqli_query($conn,$responses);
    $row = mysqli_num_rows($result);

    if($row>0){
        // echo'
        // <script>alert("Test Completed!")</script>
        // ';
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
    <link rel="stylesheet" href="styles.css">
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
                    <?php
                    echo'
                       <li class="nav-item"><a class="nav-link text-white" href="certificate.php?uid='.$sn.'">View Cert</a></li>
                     ';
                    ?>
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
                             <?php

                                    if($row>0){

                                        echo'
                                           <a href="#"><button class="btn btn-warning">Completed</button></a>
                                         ';
                                        }else{

                                             echo'
                                            <a href="license.php?sn='.$sn.'"><button class="btn btn-success">Continue Course</button></a>
                                        ';

                                        }
                        
                            ?>
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
                                <div class="certificate-container">
                            <!-- Borders -->
                            <div class="outer-border"></div>
                            <div class="inner-border"></div>

                            <!-- Header -->
                            <div class="certificate-header">
                                <h1>Certificate of Completion</h1>
                                <h2>This is awarded to</h2>
                                <div class="decorative-line"></div>
                            </div>

                            <!-- Awardee Name -->
                            <div class="certificate-awardee">


                            <?php

                                if($row>0){
                                       echo'
                                 <p> '.$f_name.' '.$l_name.'</p>
                             
                                ';
                                }else{

                                    echo'
                                        <p class="alert alert-warning" role="alert">Your Have not completed the course</p>
                                    ';
                                    
                                }
                             
                          

                             ?>

                                
                            </div>

                            <!-- Certificate Body -->
                            <div class="certificate-body">
                                <p>demonstrated proficiency in the required knowledge and skills for safe driving.</p>
                            </div>

                            <!-- Footer with Signatures and Badge -->
                            <div class="certificate-footer">
                                <div class="signature">
                                    <hr>
                                    <p>Ruth M</p>
                                    <small>Head Manager</small>
                                </div>
                                <div class="certificate-badge">
                                    <img src="https://img.icons8.com/emoji/48/000000/sports-medal-emoji.png" alt="Medal Icon">
                                </div>
                                <div class="signature">
                                    <hr>
                                    <p>Ismael Bett</p>
                                    <small>CEO and Founder</small>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </div>


    <!-- Certificate styles -->

    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #f0f2f5;
        }
        .certificate-container {
            width: 90%;
            margin: 50px auto;
            padding: 40px;
            background: white;
            position: relative;
            border: 10px solid #f4f4f4;
            border-radius: 15px;
        }
        .certificate-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .certificate-header h1 {
            font-size: 2.8rem;
            font-weight: bold;
            color: #2f2f37;
        }
        .certificate-header h2 {
            font-size: 1.5rem;
            font-weight: normal;
            color: #2f2f37;
            margin-bottom: 50px;
        }
        .certificate-awardee {
            text-align: center;
            font-size: 2rem;
            font-weight: normal;
            margin-top: -20px;
            padding-bottom: 10px;
        }
        .certificate-body {
            text-align: center;
            font-size: 1.25rem;
            font-style: italic;
            color: #555;
            margin-top: 20px;
            margin-bottom: 40px;
        }
        .certificate-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
            padding: 0 60px;
        }
        .certificate-footer .signature {
            text-align: center;
            margin-top: 20px;
        }
        .certificate-footer .signature p {
            font-weight: bold;
            font-size: 1.1rem;
            color: #2f2f37;
        }
        .certificate-footer .signature small {
            font-size: 1rem;
            color: #888;
        }
        .certificate-badge {
            text-align: center;
            margin: 20px;
        }
        .certificate-badge img {
            width: 50px;
        }

        /* Borders */
        .outer-border {
            position: absolute;
            top: -25px;
            left: -25px;
            right: -25px;
            bottom: -25px;
            border: 8px solid #f2f2f2;
        }

        .inner-border {
            position: absolute;
            top: -15px;
            left: -15px;
            right: -15px;
            bottom: -15px;
            border: 4px solid #c7a64b;
        }

        /* Decorative line under the awardee name */
        .decorative-line {
            width: 150px;
            height: 3px;
            background-color: #c7a64b;
            margin: 0 auto;
        }
    </style>

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

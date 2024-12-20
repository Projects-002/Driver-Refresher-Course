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
    <title>Process qiuz</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="height:100vh;">



     <div class="container">


                <?php

                include('database/db.php');

                // Capture form data
                $q1 = $_POST['q1'];
                $q2 = $_POST['q2'];
                $q3 = $_POST['q3'];
                $q4 = $_POST['q4'];
                $q5 = $_POST['q5'];
                $q6 = $_POST['q6'];

                // Correct answers (this array holds the correct answers for each question)
                $correct_answers = [
                    'q1' => 'B',  // Correct answer for question 1
                    'q2' => 'B',  // Correct answer for question 2
                    'q3' => 'B',  // Correct answer for question 3
                    'q4' => 'B',  // Correct answer for question 4
                    'q5' => 'B',  // Correct answer for question 5
                    'q6' => 'A'   // Correct answer for question 6
                ];

                // User's answers
                $user_answers = [
                    'q1' => $q1,
                    'q2' => $q2,
                    'q3' => $q3,
                    'q4' => $q4,
                    'q5' => $q5,
                    'q6' => $q6
                ];

                // Scoring logic
                $score = 0;
                $total_questions = count($correct_answers);

                // Loop through the user's answers and compare with correct answers
                foreach ($correct_answers as $question => $correct_answer) {
                    if ($user_answers[$question] === $correct_answer) {
                        $score++; // Increment score for every correct answer
                    }
                }

                // Calculate percentage score
                $percentage_score = ($score / $total_questions) * 100;

                // Store user's answers and score in the database


                    $sn = $_GET['sn'];

                $user = "SELECT * FROM Drivers where SN = $sn";
                $result = mysqli_query($conn, $user);
                $user = mysqli_fetch_assoc($result);



                $Name = $user["First_Name"];
                $Category = $user['License_Class'];
                $id = $user['Id_No'];
                $serial = $user['SN'];

                $sql = "INSERT INTO Responses (id, Driver_Name, Category, Id_Num ,score) VALUES ($serial ,'$Name', '$Category', '$id', '$percentage_score')";


                try{

                    if ($conn->query($sql) === TRUE) {
                        // Display the score to the user
                        echo " 
                        <div class='container d-flex align-items-center justify-content-center flex-column '>   
                        
                        <h1>Congratulations! you Passed!</h1>
                        <h3>Your score is: $score out of $total_questions.</h3>
                        <h3>Your percentage score is: " . round($percentage_score, 2). "%.</h3>
                        </div>
                        
                        ";


                    // Determine if the user passed or failed
                    if ($percentage_score >= 80) {  // Set passing score to 80%

                        
                        echo "Congratulations! You passed the quiz.";
                    } else {


                        echo "

                            <p class='bg-danger text-light py-1 px-2'> Unfortunately, you did not pass. Please try again. </p>   
                            <a href='license.php?uid='.$sn.''> <butto class='btn btn-secondary'>Back to Course</button></a>
                        
                        ";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                }catch(mysqli_sql_exception){

                    echo'
                    <div class="alert alert-warning mt-5" text-center role="alert">
                          You have already done the Test Kindly wait for the Feedback.
                    </div>

                   <a href="certificate.php?uid='.$sn.'"><button type="button" class="btn btn-warning">View Cert</button></a>

                    ';

                }

                // Close connection
                mysqli_close($conn);
                ?>

      </div>


<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
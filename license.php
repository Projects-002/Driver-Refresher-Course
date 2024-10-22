<?php
include('database/db.php');

session_start();
if(!isset($_SESSION['user'])){
    header('location: index.php');
}

$sn = $_GET['sn'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving License Renewal - Step-by-Step Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Driving License Renewal Test</h2>

        <!-- Progress Bar -->
        <div class="progress my-4">
            <div id="progressBar" class="progress-bar bg-success" style="width: 0%"></div>
        </div>

        <?php
       echo'
        <form id="quizForm" action="process_quiz.php?sn='.$sn.'" method="POST">
        ';
        ?>
            <!-- Section 1: Traffic Rules -->
            <div class="step">

                <h4 class="my-5">Section 1:    Traffic Rules</h4>

                <div class="form-group">
                    <label>1. What should you do when you approach a stop sign?</label><br>
                    <input type="radio" name="q1" value="A" required> A) Slow down but proceed carefully<br>
                    <input type="radio" name="q1" value="B" required> B) Stop completely, then proceed when safe<br>
                    <input type="radio" name="q1" value="C" required> C) Stop only if there's oncoming traffic<br>
                </div>

                <div class="form-group">
                    <label>2. What is the correct action when you see a yellow traffic light?</label><br>
                    <input type="radio" name="q2" value="A" required> A) Speed up to cross before it turns red<br>
                    <input type="radio" name="q2" value="B" required> B) Slow down and prepare to stop<br>
                    <input type="radio" name="q2" value="C" required> C) Ignore it and maintain your speed<br>
                </div>
            </div>

            <!-- Section 2: Road Safety -->
            <div class="step">
                <h4 class="my-5">Section 2: Road Safety</h4>

                <div class="form-group">
                    <label>3. In rainy conditions, what should you do to avoid hydroplaning?</label><br>
                    <input type="radio" name="q3" value="A" required> A) Increase your speed<br>
                    <input type="radio" name="q3" value="B" required> B) Slow down and avoid hard braking<br>
                    <input type="radio" name="q3" value="C" required> C) Turn off your headlights<br>
                </div>

                <div class="form-group">
                    <label>4. What should you do if an emergency vehicle is approaching with its lights flashing?</label><br>
                    <input type="radio" name="q4" value="A" required> A) Speed up<br>
                    <input type="radio" name="q4" value="B" required> B) Pull over and stop<br>
                    <input type="radio" name="q4" value="C" required> C) Continue driving until they pass<br>
                </div>
            </div>

            <!-- Section 3: Driving Techniques -->
            <div class="step">
                <h4 class="my-5">Section 3: Driving Techniques</h4>

                <div class="form-group">
                    <label>5. What’s the first thing you should do if your vehicle begins to skid?</label><br>
                    <input type="radio" name="q5" value="A" required> A) Slam on the brakes<br>
                    <input type="radio" name="q5" value="B" required> B) Ease off the accelerator and steer<br>
                    <input type="radio" name="q5" value="C" required> C) Turn in the opposite direction<br>
                </div>

                <div class="form-group">
                    <label>6. How do you properly execute a left-hand turn at an intersection?</label><br>
                    <input type="radio" name="q6" value="A" required> A) Yield to oncoming traffic<br>
                    <input type="radio" name="q6" value="B" required> B) Turn sharply into the farthest lane<br>
                    <input type="radio" name="q6" value="C" required> C) Turn quickly<br>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="form-navigation mt-4">
                <button type="button" class="previous btn btn-secondary" style="display: none;">Previous</button>
                <button type="button" class="next btn btn-primary">Next</button>
                <button type="submit" class="submit btn btn-success" style="display: none;">Submit</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript for multi-step form and progress bar -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const steps = document.querySelectorAll('.step');
            const nextButton = document.querySelector('.next');
            const previousButton = document.querySelector('.previous');
            const submitButton = document.querySelector('.submit');
            const progressBar = document.getElementById('progressBar');
            let currentStep = 0;

            function showStep(index) {
                steps.forEach((step, i) => {
                    step.style.display = i === index ? 'block' : 'none';
                });

                previousButton.style.display = index > 0 ? 'inline' : 'none';
                nextButton.style.display = index < steps.length - 1 ? 'inline' : 'none';
                submitButton.style.display = index === steps.length - 1 ? 'inline' : 'none';

                const progressPercent = ((index + 1) / steps.length) * 100;
                progressBar.style.width = progressPercent + '%';
                // progressBar.innerText = Math.round(progressPercent) + '%';
            }

            showStep(currentStep);

            nextButton.addEventListener('click', function () {
                    let stepInputs = steps[currentStep].querySelectorAll('input[type="radio"]');
                    let allAnswered = Array.from(stepInputs).some(input => input.checked);

                    if (!allAnswered) {
                        alert('You need to answer all questions before proceeding.');
                    } else {
                        if (currentStep < steps.length - 1) {
                            currentStep++;
                            showStep(currentStep);
                        }
                    }
              });


            previousButton.addEventListener('click', function () {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });



        document.getElementById('quizForm').addEventListener('submit', function (e) {
                        // Array with correct answers for each question
                        const correctAnswers = {
                            q1: 'B',
                            q2: 'B',
                            q3: 'B',
                            q4: 'B',
                            q5: 'B',
                            q6: 'A'
                        };

                        // Calculate score
                        let totalQuestions = Object.keys(correctAnswers).length;
                        let correctCount = 0;

                        for (let question in correctAnswers) {
                            let userAnswer = document.querySelector(`input[name="${question}"]:checked`);
                            if (userAnswer && userAnswer.value === correctAnswers[question]) {
                                correctCount++;
                            }
                        }

                        let score = (correctCount / totalQuestions) * 100;

                        // Check if score is less than 80%
                        if (score < 80) {
                            e.preventDefault();  // Prevent form submission
                            alert('Your score is ' + Math.round(score) + '%. You need at least 80% to pass the test.');
                        }
                    });

        });
    </script>
</body>
</html>

<?php


include('database/db.php');

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
        <h2 class="text-center">Driving License Renewal Quiz</h2>

        <!-- Progress Bar -->
        <div class="progress mb-4">
            <div id="progressBar" class="progress-bar bg-success" style="width: 0%">0%</div>
        </div>

        <form id="quizForm" action="process_quiz.php" method="POST">
            <!-- Section 1: Traffic Rules -->
            <div class="step">
                <h4>Section 1: Traffic Rules</h4>

                <div class="form-group">
                    <label>1. What should you do when you approach a stop sign?</label><br>
                    <input type="radio" name="q1" value="A"> A) Slow down but proceed carefully<br>
                    <input type="radio" name="q1" value="B"> B) Stop completely, then proceed when safe<br>
                    <input type="radio" name="q1" value="C"> C) Stop only if there's oncoming traffic<br>
                </div>

                <div class="form-group">
                    <label>2. What is the correct action when you see a yellow traffic light?</label><br>
                    <input type="radio" name="q2" value="A"> A) Speed up to cross before it turns red<br>
                    <input type="radio" name="q2" value="B"> B) Slow down and prepare to stop<br>
                    <input type="radio" name="q2" value="C"> C) Ignore it and maintain your speed<br>
                </div>
            </div>

            <!-- Section 2: Road Safety -->
            <div class="step">
                <h4>Section 2: Road Safety</h4>

                <div class="form-group">
                    <label>3. In rainy conditions, what should you do to avoid hydroplaning?</label><br>
                    <input type="radio" name="q3" value="A"> A) Increase your speed<br>
                    <input type="radio" name="q3" value="B"> B) Slow down and avoid hard braking<br>
                    <input type="radio" name="q3" value="C"> C) Turn off your headlights<br>
                </div>

                <div class="form-group">
                    <label>4. What should you do if an emergency vehicle is approaching with its lights flashing?</label><br>
                    <input type="radio" name="q4" value="A"> A) Speed up<br>
                    <input type="radio" name="q4" value="B"> B) Pull over and stop<br>
                    <input type="radio" name="q4" value="C"> C) Continue driving until they pass<br>
                </div>
            </div>

            <!-- Section 3: Driving Techniques -->
            <div class="step">
                <h4>Section 3: Driving Techniques</h4>

                <div class="form-group">
                    <label>5. What’s the first thing you should do if your vehicle begins to skid?</label><br>
                    <input type="radio" name="q5" value="A"> A) Slam on the brakes<br>
                    <input type="radio" name="q5" value="B"> B) Ease off the accelerator and steer<br>
                    <input type="radio" name="q5" value="C"> C) Turn in the opposite direction<br>
                </div>

                <div class="form-group">
                    <label>6. How do you properly execute a left-hand turn at an intersection?</label><br>
                    <input type="radio" name="q6" value="A"> A) Yield to oncoming traffic<br>
                    <input type="radio" name="q6" value="B"> B) Turn sharply into the farthest lane<br>
                    <input type="radio" name="q6" value="C"> C) Turn quickly<br>
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
                progressBar.innerText = Math.round(progressPercent) + '%';
            }

            showStep(currentStep);

            nextButton.addEventListener('click', function () {
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            });

            previousButton.addEventListener('click', function () {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            document.getElementById('quizForm').addEventListener('submit', function (e) {
                // Here you can add any additional validation before submission
            });
        });
    </script>
</body>
</html>

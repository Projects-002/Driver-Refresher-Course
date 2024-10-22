<?php

include('database/db.php');

$sn = $_GET['uid'];
// Read Drivers id
$driver = "SELECT * FROM Drivers where SN = $sn";
$feed = mysqli_query($conn, $driver);
$get_id = mysqli_fetch_assoc($feed);
$D_id = $get_id["Id_No"];
$f_name = $get_id['First_Name'];
$l_name = $get_id['Last_Name'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Completion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
</head>
<body>

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
                echo'
                <p> '.$f_name.' '.$l_name.'</p>

                ';
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

</body>
</html>

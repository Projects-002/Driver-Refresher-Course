
<?php

include("../database/db.php");

if(isset($_POST['add'])){

      $f_name = $_POST['f-name'];
      $l_name = $_POST['l-name'];
      $license = $_POST['license'];
      $id_no = $_POST['id-no'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $payment = $_POST['payment'];
      $password = $_POST['password'];

      // First_Name
      // Last_Name
      // License_Class
      // Id_No
      // Email
      // Phone
      // Payment
      // Pass

      try{
        $sql = "INSERT INTO Drivers(First_Name,Last_Name, License_Class,Id_No,Email,Phone,Payment,Pass)
            VALUES('$f_name', '$l_name', '$license', '$id_no', '$email', '$phone', '$payment', '$password')";

        $result = mysqli_query($conn, $sql);  

        echo'
        <div class="alert alert-success" role="alert">
            User Added Sucessfully!
        </div>
        ';

      }catch(mysqli_sql_exception){

        echo'
        <div class="alert alert-danger" role="alert">
          The user with the id number '.$id_no.' Already Exist!
        </div>
        ';

      }
   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drivers Refresher Course Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
  body{
    height: 90rem;
  }
</style>

<body >
  <div class="container mt-5 w-50 ">
    <h2>Adding User</h2>
    <form action="forms.php" method="POST">
      <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" name="f-name" placeholder="Enter your first name" required>
      </div>
      <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="l-name" placeholder="Enter your last name" required>
      </div>
      <div class="mb-3">
        <label for="licenseClass" class="form-label">License Class</label>
        <input type="text" class="form-control" id="licenseClass" name="license" placeholder="Enter your license class" required>
      </div>
      <div class="mb-3">
        <label for="idNo" class="form-label">ID Number</label>
        <input type="text" class="form-control" id="idNo" name="id-no" placeholder="Enter your ID number" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
      </div>
      <div class="mb-3">
        <label for="payment" class="form-label">Payment</label>
        <input type="number" class="form-control" id="payment" name="payment" placeholder="Enter payment amount" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="pass2" id="password" placeholder="Enter password" required>
      </div>
      <button type="submit" name="add" class="btn btn-warning w-100">Add User</button>
    </form>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

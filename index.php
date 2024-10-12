<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                        <form id="loginForm">
                            <div class="form-group">
                                <label for="emailPhone">Email or Phone</label>
                                <input type="text" class="form-control" id="emailPhone" placeholder="Enter email or phone" required>
                                <div class="invalid-feedback" id="emailPhoneError">Please enter a valid email or phone number.</div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                                <div class="invalid-feedback" id="passwordError">Password is required.</div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript for form validation -->
    <script>
        // Function to validate email or phone format
        function validateEmailPhone(input) {
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            const phonePattern = /^[0-9]{10}$/;
            return emailPattern.test(input) || phonePattern.test(input);
        }

        // Form validation
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const emailPhone = document.getElementById('emailPhone').value.trim();
            const password = document.getElementById('password').value.trim();

            // Validate Email/Phone
            if (!validateEmailPhone(emailPhone)) {
                document.getElementById('emailPhone').classList.add('is-invalid');
            } else {
                document.getElementById('emailPhone').classList.remove('is-invalid');
            }

            // Validate Password
            if (password === '') {
                document.getElementById('password').classList.add('is-invalid');
            } else {
                document.getElementById('password').classList.remove('is-invalid');
            }

            // If both fields are valid, submit the form
            if (validateEmailPhone(emailPhone) && password !== '') {
                alert('Form submitted successfully!');
                // You can handle the actual login logic here (e.g., send data to the server)
            }
        });
    </script>
</body>
</html>

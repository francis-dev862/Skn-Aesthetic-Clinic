<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKN Aesthetic Center</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <!-- Login Form -->
        <div id="login-form" class="form-box">
            <form action="dashboard.html" method="POST">
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit" class="button">Login</button>
            </form>
            <p>Don't have an account? <a href="#" onclick="showSignup()">Sign up</a></p>
        </div>

        <!-- Signup Form -->
        <div id="signup-form" class="form-box" style="display: none;">
            <form onsubmit="return validatePassword()">
                <input type="text" id="name" placeholder="Full Name" required>
                <input type="email" id="email" placeholder="Email" required>
                <input type="password" id="password" placeholder="Password" required>
                <input type="password" id="confirm-password" placeholder="Confirm Password" required>
                <p id="password-error" class="error-message"></p>
                <button type="submit" class="button">Sign Up</button>
            </form>
            <p>Already have an account? <a href="#" onclick="showLogin()">Login</a></p>
        </div>
    </div>

    <script>
        function showSignup() {
            document.getElementById("login-form").style.display = "none";
            document.getElementById("signup-form").style.display = "block";
        }

        function showLogin() {
            document.getElementById("signup-form").style.display = "none";
            document.getElementById("login-form").style.display = "block";
        }

        function validatePassword() {
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("confirm-password").value;
            let errorMessage = document.getElementById("password-error");

            if (password !== confirmPassword) {
                errorMessage.innerText = "Passwords do not match!";
                errorMessage.style.color = "red";
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>
</body>
</html>

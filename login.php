<?php
require_once('databases.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>National Savings Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <script>
        function showLoginForm() {
            document.getElementById('login-form').style.display = 'block';
            document.getElementById('button-container').style.display = 'none';
        }
    </script>
</head>

<body>
    <div class="container">
        <!-- Navigation Bar -->
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="admin_dashboard.php">Admin Panel</a></li>
                <li><a href="monthly_statement.php">Monthly Statement</a></li>
            </ul>
        </nav>

        <h1 class="form-title">National Savings Department (NSD)</h1>

        <div id="login-form">
            <form action="process_login.php" method="post">
                <div class="user-input-box">
                    <label for="login-email">Enter your Email</label>
                    <input type="email" id="login-email" name="login_email" required>
                </div>
                <div class="user-input-box">
                    <label for="login-password">Enter your Password</label>
                    <input type="password" id="login-password" name="login_password" required>
                </div>
                <div class="form-submit-btn">
                    <input type="submit" value="Submit" class="green-btn">
                </div>
            </form>
            <form action="forgot_password.php" method="post">
                <div class="form-submit-btn">
                    <input type="submit" value="Forgot Password?" class="green-btn">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

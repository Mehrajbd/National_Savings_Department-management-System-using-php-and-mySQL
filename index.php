<?php
require_once('databases.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>National Savings Form</title>
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
                <li><a href="admin_dashboard.php">Admin Panel</a> </li>
               <li><a href="monthly_statement.php">Monthly Statement</a></li>
            </ul>
        </nav>
        <h1 class="form-title">National Savings Department(NSD)</h1><br>
    
        <div id="button-container" class="button-container">
         
                <div class="form-submit-btn">
                    <a href="signup.php"  class="green-btn"> Register</a></div>
                <div class="form-submit-btn">
                    <a href="login.php"  class="green-btn">Log in</a></div>
            
        </div>

    </div>
</body>

</html>

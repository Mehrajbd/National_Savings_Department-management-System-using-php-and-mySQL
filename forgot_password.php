<?php
require_once('databases.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div class="container">
        <!-- Navigation Bar -->
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>

        <h1 class="form-title">Reset Password</h1>

        <div id="reset-password-form">
            <form action="process_reset_password.php" method="post">
                <div class="user-input-box">
                    <label for="new-password">Enter New Password</label>
                    <input type="password" id="new-password" name="new_password" required>
                </div>
                <div class="form-submit-btn">
                    <input type="submit" value="Submit" class="green-btn">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

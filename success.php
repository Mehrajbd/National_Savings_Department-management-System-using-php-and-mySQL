<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login Successful</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
</head>
<body>
    <div class="container">
        <h1 class="form-title">Login Successful</h1>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>! You have successfully logged in.</p>
        <a href="admin_dashboard.php" class="green-btn">Go to Admin Dashboard</a>
    </div>
</body>

</html>

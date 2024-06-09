<?php
require_once('databases.php');

// Handle approval
if (isset($_GET['approve'])) {
    $userId = $_GET['approve'];
    $sql = "UPDATE users SET status = 'approved' WHERE id = $userId";
    mysqli_query($connection, $sql);
}

// Handle rejection
if (isset($_GET['reject'])) {
    $userId = $_GET['reject'];
    $sql = "UPDATE users SET status = 'rejected' WHERE id = $userId";
    mysqli_query($connection, $sql);
}

// Retrieve all users
$sql = "SELECT * FROM users";
$result = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div class="container">
        <!-- Navigation Bar -->
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
        </nav>

        <h1 class="form-title">Admin Dashboard</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Mother's/Spouse's Name</th>
                        <th>Nominee's Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>NID</th>
                        <th>Gender</th>
                        <th>Issue Date</th>
                        <th>Address</th>
                        <th>Scheme</th>
                        <th>Sector</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['fathers_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['mothers_name_spouse_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['nominee_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['phone_no']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['nid']); ?></td>
                            <td><?php echo htmlspecialchars($row['gender']); ?></td>
                            <td><?php echo htmlspecialchars($row['issue_date']); ?></td>
                            <td><?php echo htmlspecialchars($row['address']); ?></td>
                            <td><?php echo htmlspecialchars($row['scheme']); ?></td>
                            <td><?php echo htmlspecialchars($row['sector']); ?></td>
                            <td><img src="<?php echo htmlspecialchars($row['photo']); ?>" alt="User Photo" width="100"></td>
                            <td>
                                <a href="admin_dashboard.php?approve=<?php echo $row['id']; ?>">Approve</a> |
                                <a href="admin_dashboard.php?reject=<?php echo $row['id']; ?>">Reject</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
<?php
// Close the database connection
mysqli_close($connection);
?>

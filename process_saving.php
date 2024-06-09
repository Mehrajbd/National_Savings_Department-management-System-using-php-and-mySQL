<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    require_once('databases.php');

    // Retrieve form data and validate
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $fathers_name = isset($_POST['fathers_name']) ? $_POST['fathers_name'] : '';
    $mothers_name_spouse_name = isset($_POST['mothers_name_spouse_name']) ? $_POST['mothers_name_spouse_name'] : '';
    $nominee_name = isset($_POST['nominee_name']) ? $_POST['nominee_name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $nid = isset($_POST['nid']) ? $_POST['nid'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $issue_date = isset($_POST['issue_date']) ? $_POST['issue_date'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $scheme = isset($_POST['scheme']) ? $_POST['scheme'] : '';
    $sector = isset($_POST['sector']) ? $_POST['sector'] : '';
    // File upload
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
        $photo = $_FILES['photo']['name'];
        $temp_photo = $_FILES['photo']['tmp_name'];
        $photo_location = "uploads/" . basename($photo);
        move_uploaded_file($temp_photo, $photo_location);
    } else {
        $photo_location = '';
    }

    // SQL query to insert data into the table
    $sql = "INSERT INTO users (name, fathers_name, mothers_name_spouse_name, nominee_name, phone_no, email, password, nid, gender, issue_date, address, scheme, sector, photo) 
            VALUES ('$name', '$fathers_name', '$mothers_name_spouse_name', '$nominee_name', '$phone', '$email', '$password', '$nid', '$gender', '$issue_date', '$address', '$scheme', '$sector', '$photo_location')";
    // Execute the query
    if (mysqli_query($connection, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.php");
    exit();
}
?>

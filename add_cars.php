<?php
session_start();
require_once('connection.php');

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: admin_login.php");
}

// Initialize variables for form validation
$car_plate = $model = $make = $body_type = $color = $filenames = "";
$errors = [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $car_plate = mysqli_real_escape_string($con, $_POST['car_plate']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $make = mysqli_real_escape_string($con, $_POST['make']);
    $body_type = mysqli_real_escape_string($con, $_POST['body_type']);
    $color = mysqli_real_escape_string($con, $_POST['color']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    // Validate and upload car picture
    if (!empty($_FILES['car_picture']['name'])) {
        $filenames = time() . '_' . $_FILES['car_picture']['name'];
        $target_dir = "car_images2/";
        $target_file = $target_dir . $filenames;

        if (move_uploaded_file($_FILES['car_picture']['tmp_name'], $target_file)) {
            // File uploaded successfully
        } else {
            $errors[] = "Failed to upload car picture.";
        }
    } else {
        $errors[] = "Car picture is required.";
    }

    // If there are no validation errors, insert data into the 'cars' table
    if (empty($errors)) {
        $insert_sql = "INSERT INTO cars (car_plate, model, make, body_type, color,status, filenames) VALUES ('$car_plate', '$model', '$make', '$body_type', '$color','$status', '$filenames')";

        if ($con->query($insert_sql) === TRUE) {
            echo '<script>alert("Car details added successfully.");</script>';
        } else {
            echo '<script>alert("Error adding car details: ' . $con->error . '");</script>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car Details</title>
    <link rel="stylesheet" href="car_add.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="admin_panel.php">Go Back</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>

    <div class="form-container">
        <h2>Add Car Details</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="car_plate">Car Plate:</label>
            <input type="text" id="car_plate" name="car_plate" required><br>

            <label for="model">Model:</label>
            <input type="text" id="model" name="model" required><br>

            <label for="make">Make:</label>
            <input type="text" id="make" name="make" required><br>

            <label for="body_type">Body Type:</label>
            <input type="text" id="body_type" name="body_type" required><br>

            <label for="color">Color:</label>
            <input type="text" id="color" name="color" required><br>

                <label for="status">Status:</label>
            <select name="status" required>
                <option value="UnBooked">UnBooked</option>
            
            </select>
            
            <label for="car_picture">Car Picture:</label>
            <input type="file" id="car_picture" name="car_picture" accept="image/*" required><br>

            <input type="submit" value="Add Car">
        </form>

        <?php
        // Display validation errors
        if (!empty($errors)) {
            echo '<div class="error-container">';
            foreach ($errors as $error) {
                echo '<p>' . $error . '</p>';
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>

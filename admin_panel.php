
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: admin_login.php");
}

$email = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Admin Panel</title>
      <link rel="stylesheet" href="admin_style.css">
</head>
<body>
   <div class="admin-panel-container">
        <h2>Welcome, Admin!</h2>
        <div class="functions">
            <a href="add_cars.php">Add Car</a>
            <a href="remove_car.php">Remove Car</a>
            <a href="index.php">Logout</a>
        </div>
    </div>
</body>
</html>



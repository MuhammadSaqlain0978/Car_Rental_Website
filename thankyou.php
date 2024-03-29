<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-image: url('your-background-image.jpg'); /* Replace with the path to your background image */
            background-size: cover;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333; /* Text color on the background */
        }

        header {
            background-color: dimgray;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            margin: 0;
            color: #fff;
        }

        nav {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for better readability */
            padding: 10px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            display: inline;
            margin-right: 20px;
        }

        a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease; /* Smooth color transition on hover */
        }

        a:hover {
            color: #ffd700; /* Change color on hover */
        }

        .thank-you-container {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .thank-you-message {
            font-size: 24px;
            color: #333;
        }

        .nav-buttons {
            margin-top: 20px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Smooth background color transition on hover */
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
    <title>Thank You</title>
</head>

<body>

    <header>
        <h1>Car Rental Company</h1>
    </header>

    <nav>
        <ul>
            <li><a href="front.php">Home</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
    </nav>

    <div class="thank-you-container">
        <div class="thank-you-message">
            <p>Thank you for your submission!</p>
            <p>We appreciate your business.</p>
        </div>
        <div class="nav-buttons">
            <a href="front.php"><button>Home</button></a>
            <a href="contact.php"><button>Contact Us</button></a>
            <a href="about.php"><button>About Us</button></a>
        </div>
    </div>

</body>

</html>

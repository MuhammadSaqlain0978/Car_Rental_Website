




<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" initial-scale="1.0" />
    <style>
        body {
            background-image: url(bgcar.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
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
        }

        p {
            align-content: inherit;
        }

        .contact-us {
            cursor: pointer;
            position: relative;
        }

        .contact-options {
            display: none;
            position: absolute;
            top: 30px;
            right: 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .contact-us:hover .contact-options {
            display: block;
        }

        nav {
            background-color: #333;
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
        }

        .main-content {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            margin-top: 20px;
        }

      

        .form-container {
            background-color: aliceblue;
            width: 40%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            padding: 10px;
           
        }

        label, input {
            display: flex;
            margin-bottom: 10px;
        }

        button {
            background-color: forestgreen;
            color: ghostwhite;
            border:hidden;
            border-radius:50px;
           display:inline-block;
            align-content:center;
            padding: 10px;
        
            cursor: pointer;
         
          
        }
    </style>
    <title></title>
</head>
<body>

    <header>
        <h1>Car Rental Company</h1>

    </header>

    <nav>
        <ul>
            <li><a href="front.php">Back</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.php">About Us</a></li>

        </ul>
    </nav>
    <section class="main-content">
      
        <div class="form-container">
            <h2>Rent a Car Now</h2>
            <p>Please fill the follwoing Infromation</p>
            
            <form action="user_info_process.php" method="POST" > 
               
                <label for="Fname">First Name:</label>
                <input type="text" id="Fname" name="Fname" required>

                <label for="Lname">Last Name:</label>
                <input type="text" id="Lname" name="Lname" required>


                <label for="Phone number">Phone Number:</label>
                <input type="text" id="Numb" name="Numb" required>


                <label for="Email">Email:</label>
                <input type="email" id="Email" name="Email" required>


                <label for="duration">Duration:</label>
                
                <input type="text" id="duration" name="duration" required>
<!--
                 <input type="hidden" name="car_id" value="123"> 
                
                <label for="Email">Email:</label>
                <select> 
                <option </select>
                <input type="email" id="Email" name="Email" required>
-->


                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

          
</body>
</html>




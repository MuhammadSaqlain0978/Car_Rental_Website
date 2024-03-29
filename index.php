
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Catalog</title>
    <style>
        body {
            background-color: black;
            background-repeat: no-repeat;
            background-size: 1500px;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-image: url('header bg.jpg');
            background-repeat: repeat-x;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            align-content: center;
            color: azure;
        }

        h2 {
            color: azure;
        }

        nav {
            background-color: transparent;
            padding: 10px;
            border: 3px solid hidden;
            border-radius: 15px;
        }


        



        .hide {
            display: none;
        }

        .hero-card:hover + .hide {
            display: block;
            color: ghostwhite;
        }

        .hero-card {
            background-image: url('page_pics/background toy car and key.jpg');
            width: 1090px;
            height: 250px;
            border: solid hidden;
            border-radius: 70px;
            margin-top: 50px;
            margin-left: 90px;
            color: white;
            padding:0;
            text-align: center;
        }
        .hero-card video {
            width: 100%;
            height: 100%;
            border: solid hidden;
            border-radius: 30px;
            object-fit: cover;
        }

        .left-card {
            background-image: url('page_pics/carinterior.jpg');
            background-position: center;
            width: 400px;
            height: 400px;
            margin-left: 90px;
            margin-right: 50px;
            border: solid hidden;
            border-radius: 50px;
            align-content: center;
            text-align: center;
            box-sizing: border-box;
        }
        .left-card video {
            width: 100%;
            height: 100%;
            border: solid hidden;
            border-radius: 30px;
            object-fit: cover;
        }
        .right-card {
            background-image: url('page_pics/maps.jpg');
            background-position: center;
            width: 400px;
            height: 400px;
            margin-left: 50px;
            margin-right: 90px;
            border: solid hidden;
            border-radius: 50px;
            align-content: center;
            text-align: center;
        }

        .book-card {
            background-image: url('page_pics/background toy car and key.jpg');
            background-repeat:no-repeat;
            background-position: center;
            width: 1090px;
            height: 250px;
            border: solid hidden;
            border-radius: 100px;
            margin-top: 50px;
            margin-left: 90px;
            margin-bottom: 100px;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .hero-card:hover {
            filter: brightness(80%);
        }

        .left-card:hover {
            filter: brightness(60%);
        }

        .right-card:hover {
            filter: brightness(60%);
        }

        .book-card:hover {
            filter: brightness(50%);
        }

        .sidepara {
            margin-top: 40px;
            display: flex;
            padding: 20px;
            box-sizing: border-box;
        }

        .sidepara1 {
            display: flex;
        }

        .right-paragraph {
            padding: 15px;
            flex: 1;
        }

            .right-paragraph h2 {
                color: white;
                font-family: 'Comic Sans MS';
                font-weight: 100;
                margin: 0;
                padding: 70px;
                background-color: black; /* You can customize the background color */
                border-radius: 8px;
                box-shadow: inherit;
            }

        .left-paragraph {
            padding: 15px;
            flex: 1;
        }

            .left-paragraph h2 {
                color: white;
                font-family: 'Comic Sans MS';
                font-weight: 100;
                margin: 0;
                padding: 60px;
                background-color: black; /* You can customize the background color */
                border-radius: 8px;
                box-shadow: inherit;
            }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            color: mistyrose;
            background-color:transparent;
            border: 1px solid hidden;
            border-radius: 13px;
            padding: 5px;
            font-family: 'Trebuchet MS', sans-serif;
            display: inline;
            margin-right: 30px;
        }

            li:hover {
                background-color: darkgray;
            }


        a {
            text-decoration: none;
            color: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            width: 300px;
            margin: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

            .card img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }

        .card-content {
            padding: 15px;
        }

            .card-content h3 {
                margin: 0;
                color: #333;
            }

            .card-content p {
                margin: 5px 0;
                color: #777;
            }

        .book-now-btn {
            background-color: #333;
            color: #fff;
            padding: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin-top: 10px;
        }
        footer {
            background-color: rgb(116, 45, 45);
            color: #fff;
            padding: 1em 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            color: #fff;
        }

        .copyright {
            text-align: center;
            margin-top: 1em;
        }

        .copyright {
            color: #fff;
        }

        .socials {
            margin-left: 630px;
        }

        footer {
            background-color: rgb(116, 45, 45);
            color: #fff;
            padding: 3px;
            
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            color: #fff;
            padding:5px;
        }

        .copyright {
            text-align: center;
            margin-top: 1em;
        }

        .copyright {
            color: #fff;
        }

        .socials {
            margin-left: 630px;
        }

        #fb_logo {
            width: 45px;
            height: 45px;
        }

        #insta_logo {
            width: 45px;
            height: 45px;
        }

        #twitter_logo {
            width: 45px;
            height:45px;
        }


    </style>
</head>


<body>

    <header>
        <h1>Saltanat Car Rentals</h1>
        <h2>Welcome to our website </h2>

    </header>
    <nav>
        <div class=" leftbuttons">
            <ul>

                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="front.php">Book Now</a></li>
                <li><a href="admin_login.php">For Admin</a> </li>
            </ul>
        </div>

    </nav>
    <a href="front.php">
        <div class="hero-card">
            <h2>Rent the car of your choice on the day of your choice from Saltanat rentals! </h2>
            <video width="320" height="240" autoplay muted>
                <source src="page_pics/long drive.mp4" type="video/mp4">
            </video>
        </div>

    </a>
    <a href="front.php"s>
        <div class="sidepara">
            <div class="left-card">
                <video width="320" height="240" autoplay muted>
                    <source src="page_pics/startbutton.mp4" type="video/mp4">
                    </video>
            </div>
            <div class="right-paragraph">
                <h2>
                    Experience seamless and secure car bookings with our company.
                    We prioritize your convenience, providing a user-friendly platform for
                    effortless reservations, ensuring a hassle-free and reliable
                    journey every time you choose our service.
                </h2>
            </div>
        </div>
    </a>

    <a href="https://www.google.com/maps/search/car+rentals/@33.705896,73.0276823,14.65z?entry=ttu" target="_blank">
        <div class=" sidepara1">
            <div class="left-paragraph">
                <h2>
                    Discover the unparalleled convenience of our car rental services with offices
                    strategically situated in diverse locations. Whether you're exploring urban
                    landscapes, coastal getaways, or rural retreats, our widespread presence ensures
                    easy access, allowing you to embark on your journey seamlessly from any destination,
                    providing a hassle-free travel experience.
                </h2>
            </div>
            <div class="right-card">
             <h1>See our locations ! </h1>
            </div>

        </div>
    </a>

    <a href="front.php">
        <div>
            <div class="book-card">
                <h2>Book a car now!</h2>
            </div>

        </div>
    </a>


    <footer>
        <div class="container">
            
                <div class="row">
        
                    <div>
                        <h4>Contact Us</h4><br>
                        <p>Email: usmanakbar.ua93@gmail.com</p>
                        <p>Phone: 03038726269</p>
                        <p>Address: F7 Markaz, Islamabad,Pakistan</p>
                    </div>

                    <div class="socials">
                        <h4>Follow Us On</h4><br>
                        <p>
                            <a href="https://Twitter.com"><img id="twitter_logo" src="page_pics/ttrlogo.jpg"></a>
                            <a href="https://www.facebook.com/"><img id="fb_logo" src="page_pics/fblogo.jpg"></a>
                            <a href="https://instagram.com"><img id="insta_logo" src="page_pics/iglogo.jpg"></a>
                        </p>
                    </div>
                </div>
            

        </div>
        <div>
        <p class="copyright">Copyright © 2023 Saltanat Car Rentals</p>
        </div>
    </footer>

</body>

</html>

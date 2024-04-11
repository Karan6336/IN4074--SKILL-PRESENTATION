<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="index.css">
    <title>Reservation</title>
    <style>
        /* Add custom styles here */
        body {
            /* Using multiple background images */
            background-image: url('about-image.jpg'), url('3.jpg');
            background-size: contain,cover; /* Adjusted background-size */
            background-repeat: no-repeat, no-repeat;
            background-position: left , right; /* Adjusted background position */
            background-attachment: fixed, fixed;
            color:white ;
        }
    </style>
</head>
<body>
    <nav>
        <ul class="nav-flex-row">
            <li class="nav-item">
                <a href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a href="reservation.php">Reservation</a>
            </li>
            <li class="nav-item">
                <a href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
                <a href="index.php">Shop</a>
            </li>
        </ul>
    </nav>

    <section id="reservation" class="section-content">
        <h2>Reservation</h2>
        <p>
            Please leave your number, and we will call you to make a reservation.
        </p>
        <form method="post" action="process_reservation.php" enctype="multipart/form-data">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="phone">Phone Number:</label><br>
    <input type="tel" id="phone" name="phone"><br>
    <label for="photo">Photo:</label><br>
    <input type="file" id="photo" name="photo"><br><br>
    <input type="submit" value="Submit">
</form>

        <p>
            At our restaurant, we understand the importance of creating memorable dining experiences. Your reservation is not just a table booking; it's an opportunity for us to delight your taste buds and cater to your every need. As you prepare to join us for a culinary journey, rest assured that our team is dedicated to ensuring your satisfaction. From the moment you step through our doors to the final bite of your meal, expect nothing short of excellence. We look forward to welcoming you and exceeding your expectations. 
        </p>
    </section>

</body>
</html>

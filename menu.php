<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="index.css">
    <style>
        /* Additional styling for enhanced appearance */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        .nav-flex-row {
            display: flex;
            justify-content: space-around;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .nav-item a {
            text-decoration: none;
            color: #fff;
        }
        section#menu {
            text-align: center;
            padding: 20px;
        }
        section#menu h2 {
            color: #333;
            margin-bottom: 20px;
        }
        section#menu ul {
            list-style-type: none;
            padding: 0;
        }
        section#menu ul li {
            background-color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        section#menu ul li:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        section#menu ul li img {
            max-height: 200px; /* Set a fixed height */
            width: auto; /* Let the width adjust to maintain aspect ratio */
            border-radius: 5px;
            margin-bottom: 10px; /* Add margin between images */
            margin-top: 10px; /* Add top margin */
        }
    </style>
    <title>Menu</title>
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

    <section id="menu">
        <h2>Our Delicious Menu</h2>
        <ul>
            <li>
                <h3>Appetizers</h3>
                <p>Start your meal with our scrumptious appetizers.</p>
                <img src="food3.jpg" alt="Appetizers">
                <img src="food2.jpg" alt="Appetizers">
                <img src="food1.jpg" alt="Appetizers">
                <img src="menu5.jpg" alt="Appetizers">
            </li>
            <li>
                <h3>Main Courses</h3>
                <p>Explore our variety of mouth-watering main courses.</p>
                <img src="2.jpg" alt="Main Courses">
                <img src="menu2.jpg" alt="Main Courses">
                <img src="menu4.jpg" alt="Main Courses">
                <img src="menu3.jpg" alt="Main Courses">
            </li>
            <li>
                <h3>Desserts</h3>
                <p>Satisfy your sweet tooth with our heavenly desserts.</p>
                <img src="4.jpg" alt="Desserts">
                <img src="1.jpg" alt="Desserts">
            </li>
            <li>
                <h3>Drinks</h3>
                <p>Quench your thirst with our refreshing drink options.</p>
                <img src="menu1.jpg" alt="Drinks">
            </li>
        </ul>
    </section>

</body>
</html>

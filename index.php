<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Restaurant Website</title>
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
            <a href="#shop">Shop</a>
        </li>
    </ul>
</nav>

<section class="section-intro">
    <header>
        <h1>Fooddddie</h1>
    </header>
    <div class="link-to-book-wrapper">
        <a class="link-to-book" href="reservation.php">Book a table</a>
    </div>
</section>

<section class="about-section">
    <article>
        <h3>
            Why your restaurant is the best.
        </h3>
        <p>

          Welcome to Fooddddie, where gastronomic delights meet unparalleled hospitality. Our restaurant is not just about meals; it's an experience. Nestled in the heart of Palo-Alto, we pride ourselves on offering a culinary journey like no other. From meticulously crafted dishes that tantalize your taste buds to a warm and inviting ambiance that beckons you to linger, every moment spent with us is a celebration of food and friendship. Whether you're looking to savor a leisurely brunch with friends or enjoy an intimate dinner with loved ones, Fooddddie promises an unforgettable dining experience that leaves you craving for more. Join us and indulge in a symphony of flavors, where every bite tells a story and every dish is a masterpiece.
        </p>
    </article>
</section>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="1.jpg" class="d-block w-100" alt="food">
        </div>
        <div class="carousel-item">
            <img src="2.jpg" class="d-block w-100" alt="food">
        </div>
        <div class="carousel-item">
            <img src="4.jpg" class="d-block w-100" alt="food">
        </div>
    </div>
</div>

<div class="container">
    <div class="row-flex">
        <div class="flex-column-form">
            <h3>
                Make a booking
            </h3>
            <form class="media-centered">
                <div class="form-group">
                    <p>
                        Please leave your number we will call to make a reservation
                    </p>
                    <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputphoneNumber1" placeholder="Enter your phone number">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="opening-time">
            <h3>
                Opening times
            </h3>
            <p>
                <span>Monday—Thursday: 08:00 — 22:00</span>
                <span>Friday—Saturday: 09:00 — 23:00 </span>
                <span>Sunday: 10:00 — 17:00</span>
            </p>
        </div>
        <div class="contact-adress">
            <h3>
                Contact
            </h3>
            <p>
                <span>000 9283 8456</span>
                <span>15 Florida Ave</span>
                <span>Palo-Alto, 1111 CA</span>
            </p>
        </div>
    </div>
</div>

</body>
</html>

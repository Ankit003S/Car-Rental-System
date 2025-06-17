<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
<?php include("partials/nav.php"); ?>

   <center> <h1 class="title">Search Model</h1></center>
    <ul class="car-list-page">
    <?php
if (isset($_GET['query'])) {
    $searchTerm = $_GET['query'];
    $sql = "SELECT * FROM cars where brand = '$searchTerm'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $carid = $row["id"];
        $carModel = $row["model"];
        $carPrice = "₹" . $row["rental_price"] . "/";
        $carImage = $row["id"];

        ?>

        <li class="car-item-page">
            <img src="img/<?php echo '' . $carImage . '' ?>.jpg" alt="Car 1" class="car-image-page">
            <div>
                <h3>
                    <?php echo '' . $carModel . '' ?>
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit amet consectetur adi</p>
                <p>Price:
                    <?php echo '' . $carPrice . '' ?>day
                </p>
                <a href="booking.php?id=<?php echo '' . $carid . '' ?>"><button class="book-now-btn">Book Now</button></a>
            </div>
        </li>
        <?php
    }
    echo '</ul>';
}

?>
    </ul>






    <footer>
        &copy; 2023 Car Rental | All rights reserved
    </footer>
</body>

</html>
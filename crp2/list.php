<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Lemon' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    <?php include("partials/nav.php"); ?>
    <?php include("partials/filter.php"); ?>

   <center> <h1 class="title">Available Cars</h1></center>
    <ul class="car-list-page">
        <?php
        $sql = "SELECT * FROM cars";
        if(isset($_GET["price"])){
            $price= $_GET["price"];
            list($a, $b) = explode('-', $price);
            $sql = "SELECT * FROM cars WHERE rental_price BETWEEN $a AND $b";
        }
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<ul class="car-list2">';
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $carid = $row["id"];
                $Discription = $row["Discription"];
                $carModel = $row["brand"];
                $carPrice = $row["rental_price"];
                $carImage = $row["id"];

                ?>

                <li class="car-item-page">
                    <img src="img/<?php echo '' . $carImage . '' ?>.jpg" alt="Car 1" class="car-image-page">
                    <div style="margin: 0 56px;">
                        <h3>
                            <?php echo '' . $carModel . '' ?>
                        </h3>
                        <p>
                            <?php echo '' . $Discription . '' ?>
                        </p>
                        <p>Price:
                            <?php echo '₹' . $carPrice . '' ?>/per day
                        </p>
                        <div class="rating">
                            <input type="radio" class="star" name="rating" id="star5" checked><label for="star5"
                                class="slabel"></label>
                            <input type="radio" class="star" name="rating" id="star4"><label for="star4" class="slabel"></label>
                            <input type="radio" class="star" name="rating" id="star3"><label for="star3" class="slabel"></label>
                            <input type="radio" class="star" name="rating" id="star2"><label for="star2" class="slabel"></label>
                            <input type="radio" class="star" name="rating" id="star1"><label for="star1" class="slabel"></label>
                        </div>
                        <a href="booking.php?id=<?php echo $carid ?>&price=<?php echo $carPrice ?>"><button class="book-now-btn">Book
                                Now</button></a>
                    </div>
                </li>
                <?php
            }
            echo '</ul>';
        } else {
            echo "0 results";
        }
        ?>

    </ul>







</body>

</html>
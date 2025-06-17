<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Lemon' rel='stylesheet'>
    <title>Car Rental</title>
</head>

<body>
    <?php include("partials/nav.php"); ?>

    <div class="slider-container">
        <div class="slides">
            <div class="slide"><img src="img/campbell-3ZUsNJhi_Ik-unsplash.jpg" alt="Image 1"></div>
            <div class="slide"><img src="img/peter-broomfield-m3m-lnR90uM-unsplash.jpg" alt="Image 2"></div>
            <div class="slide"><img src="img/stefan-rodriguez-2AovfzYV3rc-unsplash.jpg" alt="Image 3"></div>
        </div>
    </div>

    <div class="about-section" id="about">
        <h1 class="about-title"><center>About Us</center></h1>
        <p class="about-content">
            Welcome to our car rental service!
            <br> Welcome to Kuldeep's car, where we redefine the way you experience travel. Established with a passion for providing seamless mobility solutions, we take pride in offering top-notch car rental services that elevate your journey.
<br>
<br>
<b><u>Our Mission</u></b><br>
<br>
At Kuldeep's car, our mission is to empower travelers with the freedom to explore the world at their own pace. We believe in making every trip memorable by delivering reliable, convenient, and affordable car rental options.
<br>
<br>

        </p>
    </div>
    </div>




    <h2 class="title"><center>Available Cars</center></h2>
    <ul class="car-list">
        <?php
        // Assuming you have already established a database connection
        
        // Fetching data from the 'cars' table
        $sql = "SELECT * FROM cars WHERE new= 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $carModel = $row["model"];
                $carPrice = $row["rental_price"];
                $carid = $row["id"];
                $carImage = "img/" . $row["id"] . ".jpg"; // Assuming the image path is based on the car's ID
        
                // Displaying HTML with fetched data
                echo '<li class="car-item">
                <img style="width: 398px;" src="' . $carImage . '" alt="' . $carModel . '" class="car-image">
                <h3>' . $carModel . '</h3>
                <p>Price:  ' . $carPrice . '</p>
                <div class="rating">
                            <input type="radio" class="star" name="rating" id="star5" checked><label for="star5"
                                class="slabel"></label>
                            <input type="radio" class="star" name="rating" id="star4"><label for="star4" class="slabel"></label>
                            <input type="radio" class="star" name="rating" id="star3"><label for="star3" class="slabel"></label>
                            <input type="radio" class="star" name="rating" id="star2"><label for="star2" class="slabel"></label>
                            <input type="radio" class="star" name="rating" id="star1"><label for="star1" class="slabel"></label>
                        </div>
                        <a href="booking.php?id=<?php echo '.$carid.' ?>&price=<?php echo '.$carPrice.' ?>"><button class="book-now-btn">Book
                                Now</button></a>
              </li>';
            }
        } else {
            echo "0 results";
        }
        ?>
    </ul>




    <?php include('partials/footer.php');?>
   
    <script>
        // JavaScript for Image Slider
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.querySelector('.slides');
            currentSlide = index;
            slides.style.transform = `translateX(${-index * 100}%)`;
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % 3;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + 3) % 3;
            showSlide(currentSlide);
        }

        // Automatic slide change (optional)
        setInterval(nextSlide, 5000); // Change slide every 5 seconds
    </script>

</body>

</html>
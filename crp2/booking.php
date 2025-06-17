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

    <?php
    if (isset($_GET["id"])) {
        $car_id = $_GET["id"];
        $price = $_GET["price"];
    }
    include("partials/checklogin.php");



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $customerName = $_SESSION['c_ID'];
        $car_id = $_POST['car_id'];
        $rentalDays = $_POST['dDays'];
        $pickupDate = $_POST['pickupDate'];
        $num = $_POST['nod'];
        $price = $_POST['tPrice'];
        $query = "SELECT * FROM reservations WHERE (
            (carID = $car_id AND start <= '$pickupDate' AND end >= '$pickupDate')
            OR
            (carID = $car_id AND start <= '$rentalDays' AND end >= '$rentalDays')
         );";
        $result = $conn->query($query);

        // Process the result
        if ($result->num_rows == 0) {
            echo "<script>alert('Booking is Succesfully done')</script>";
            $sql = "INSERT INTO `booking` (`customer_id`, `car_id`, `numberOfDays`, `price`) VALUES ('$customerName', '$car_id', '$num', '$price');";
            $result = $conn->query($sql);
            $sql = "INSERT INTO `reservations` (`carID`, `start`, `end`) VALUES ('$car_id', '$pickupDate', '$rentalDays');;";
            $result = $conn->query($sql);
        } else {
            // No available cars for the specified dates
            echo "<script>alert('Car is no Available for selected date')</script>";
        }


    }
    ?>

    <div class="container">
        <h2 class="title">Car Rental</h2>
        <form id="carRentalForm" method="POST">
            <div>
                <label for="pickupDate">Pickup Date:</label>
                <input type="date" id="pickupDate" name="pickupDate" class="form-input" required>
            </div>
            <input type="hidden" name="car_id" value="<?php echo $car_id; ?>">
            <div>
                <label for="dropDate">Drop Date:</label>
                <input type="date" id="dropDate" name="dDays" class="form-input" required>
            </div>
            <div>
                <p>Drivers Price 1000</p>
                <label for="driver">Driver:<input type="radio" id="driver" name="driver">Non Driver:<input type="radio" id="ndriver" name="driver"></label>
            </div>
            <button type="button" onclick="calculateDays()">Calculate</button>

            <div>
                <label for="nod">Total Number of days:</label>
                <input type="text" id="nod" name="nod" class="form-input" readonly>
            </div>

            <div>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" class="form-input" readonly>
            </div>

            <div>
                <label for="des">Discount:</label>
                <input type="text" id="des" name="des" class="form-input" value="3%" readonly>
            </div>

            <div>
                <label for="tPrice">Total Price:</label>
                <input type="text" id="tPrice" name="tPrice" class="form-input" readonly>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>

    <script>
        function calculateDays() {
            var pickupDate = new Date(document.getElementById('pickupDate').value);
            var dropDate = new Date(document.getElementById('dropDate').value);
            var driver = 1;
            if (document.getElementById('driver').checked) {
                driver = 1000;
            }

            // Calculate the difference in milliseconds
            var timeDifference = dropDate - pickupDate;
            var timeDifferenceInDays = timeDifference / (1000 * 3600 * 24);
            console.log(timeDifference)
            var price = (<?php echo $price; ?> * timeDifferenceInDays) + (timeDifferenceInDays * driver);
            var Des = 3;
            var tPrice = (price - (price * (Des / 100)));

            // Calculate the number of days
            var daysDifference = Math.ceil(timeDifference / (1000 * 60 * 60 * 24));

            // Display the result in the "nod" input
            document.getElementById('nod').value = daysDifference;
            document.getElementById('price').value = price;
            document.getElementById('tPrice').value = tPrice;
        }
    </script>
</body>

</html>
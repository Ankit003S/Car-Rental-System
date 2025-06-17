<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Car Rental Portal - My Booking</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Reset some default browser styles */
        body,
        h1,
        h2,
        h3,
        p,
        ul,
        li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* User Profile Section */
        .user_profile {
            padding: 50px 0;
        }

        .profile_wrap {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .uppercase {
            text-transform: uppercase;
        }

        .underline {
            border-bottom: 2px solid #333;
            margin-bottom: 20px;
        }

        /* Vehicle Listing */
        .my_vehicles_list {
            list-style: none;
        }

        .vehicle_listing li {
            margin-bottom: 30px;
        }

        /* Booking Details */
        .vehicle_img img {
            width: 100%;
            height: auto;
        }

        .vehicle_title {
            margin-top: 10px;
        }

        .vehicle_title h6 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .vehicle_title p {
            font-size: 14px;
            color: #555;
        }

        .vehicle_title div {
            margin-top: 10px;
        }

        .vehicle_status {
            margin-top: 15px;
        }

        .btn.active-btn {
            background-color: #4CAF50;
            color: #fff;
        }

        /* Clearfix */
        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body>
    <?php include("partials/nav.php"); ?>
    <?php include("partials/checklogin.php"); ?>

    <!--User Profile Section-->
    <section class="user_profile inner_pages">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="profile_wrap">
                        <h5 class="uppercase underline">My Booikngs </h5>
                        <div class="my_vehicles_list">
                            <ul class="vehicle_listing">
                                <!-- Booking List -->
                                <li>
                                    <?php
                                    $cid = $_SESSION['c_ID'];
                                    $sql = "SELECT * FROM booking WHERE customer_id='$cid'";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Fetching and displaying data
                                        while ($row = $result->fetch_assoc()) {
                                            $number = $row["booking_id"];
                                            $customer_id = $row["customer_id"];
                                            $car_id = $row["car_id"];
                                            $numberOfDays = $row["numberOfDays"];
                                            $price = $row["price"];


                                            ?>
                                            <h4 style="color:red">Booking No #
                                                <?php echo $number ?>
                                            </h4>
                                            <div class="vehicle_img"> <a href="#"><img style="width: 278px;" src="img/<?php echo $car_id ?>.jpg" alt="image"></a> </div>
                                            <div class="vehicle_title">
                                                <h6><a href="#">Car ID ,
                                                        <?php echo $customer_id ?>
                                                    </a></h6>
                                                <p><b>Total number of days </b>
                                                    <?php echo $numberOfDays ?>
                                                </p>
                                                <p><b>Total price is </b>
                                                    <?php echo $price ?>
                                                </p>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        echo "No bookings found";
                                    }
                                    ?>
                                </li>
                                <!-- End Booking List -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
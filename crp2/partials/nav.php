<?php
// Start the session at the very beginning
session_start();
?>

<div class="Navigation">
    <div class="navigationLeft">
        <img class="logo" src="img/logo.jpg" alt="LB">
    </div>

    <div class="navigationRight">
        <?php
        include("partials/connect.php");
        // Check if the user is logged in
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            echo '<div class="Signup">
                    <a href="login.php"><button class="btn">Login</button></a>
                  </div>';
        } else {
            echo '<div class="Signup">
                    <a href="logout.php"><button class="btn">Log Out</button></a>
                  </div>';
        }
        ?>
        <a href="#"><img class="lImg" src="Img/profile.jpeg" alt="Profile Image"> </a>
        <div class="nSearch">
            <form action="search.php" method="GET">
                <input name="query" type="text" placeholder="Search">
                <button class="nBtn" type="submit"><img style="width: 22px;" src="Img/search.png" alt="Search"></button>
            </form>
        </div>
    </div>
</div>

<div class="nav">
    <div class="navleft">
        <a class="links" href="index.php">
            <h2 class="navM">HOME</h2>
        </a>
        <a class="links" href="about.php">
            <h2 class="navM">About</h2>
        </a>
        <a class="links" href="list.php">
            <h2 class="navM">Bike Listing</h2>
        </a>
        <a class="links" href="contact.php">
            <h2 class="navM">Contact</h2>
        </a>
        <a class="links" href="boked.php">
            <h2 class="navM">My Bookings</h2>
        </a>
    </div>
</div>

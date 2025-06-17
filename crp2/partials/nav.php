<div class="Navigation">

    <div class="navigationLeft">
        <h1>Mishra's Cars</h1>
    </div>
    <div class="navigationRight">
        <div class="SocialMedia">
            <a href="https://www.facebook.com/profile.php?id=100015282840662&mibextid=ZbWKwL"> <img class="lImg" src="Img/Facebook_Logo_(2019).png.webp" alt="Facebook"></a>
            <a href="https://www.instagram.com/kuldeepmishraa_?igsh=MXRlcGp0czRneGxweA=="> <img class="lImg" src="Img/pngtree-instagram-icon-instagram-logo-picture-image_3584852.png"
                    alt="Instagram"></a>
            <a href="#"> <img class="lImg" src="Img/twitter-logo-twitter-icon-transparent-free-free-png.webp"
                    alt="Twitter"> </a>
        </div>
        <?php
        include("partials/connect.php");
        session_start();
        if (!$login) {
            echo '<div class="Signup">
<a href="login.php"><button class="btn">Login/Registration</button></a>
</div>';
        } else {
            echo '<div class="Signup">
    <a href="logout.php"><button class="btn">Log Out</button></a>
</div>';
        }

        ?>

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
            <h2 class="navM">Car Listing</h2>
        </a>
        <a class="links" href="fandq.php">
            <h2 class="navM">F&Q</h2>
        </a>
        <a class="links" href="contact.php">
            <h2 class="navM">Contact</h2>
        </a>
        <a class="links" href="boked.php">
            <h2 class="navM">My Bookings</h2>
        </a>

    </div>

    <div class="naviright">

        <a href="#"><img class="lImg" src="Img/profile.png"> </a>
        <div class="nSearch">
            <form action="search.php" method="GET">
                <input name="query" type="text" placeholder="Search">
                <button class="nBtn" type="submit"><img style="width: 22px;" src="Img/Search.jfif"
                        alt="Search"></button>
            </form>
        </div>
    </div>

</div>
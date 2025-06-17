<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Lemon' rel='stylesheet'>
    
    <title>Contact Us</title>
</head>

<body>
    <?php include("partials/nav.php"); ?>

    <div class="container">
        <div class="form-container">
            <h2 class="title"><center>Contact Us</center></h2>
            <form id="contactForm" method="post">
                <div>
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" class="form-input" required>
                </div>

                <div>
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>

                <div>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" class="form-input" rows="5" required></textarea>
                </div>

                <button type="submit" class="submit-btn" onclick="myFunction()">Submit</button>
            </form>
        </div>

    

    <script>
        function myFunction() {
            alert('Message sent Successfully!');
        }
    </script>
</body>

</html>
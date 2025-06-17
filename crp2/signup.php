<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include"partials/connect.php";

    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform validation on the received data (you might want to add more validation)
    if (!empty($username) && !empty($email) && !empty($password)) {


        $hashed_password = $password;

        // Insert user data into the database
        $sql = "INSERT INTO user (user_name, email, password) VALUES ('$username', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Sign up successful!')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign-Up Page</title>
</head>
<body>

    <div class="login-container">
        <div class="hmmm">

            <h2>Sign Up</h2>
            <form class="login-form" action="signup.php" method="post"> <!-- Send form data to process_signup.php -->
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <p class="la" style=style="color: white;"><a href="login.php" style="color: red;">Click here!</a>  for login </p>
                <button type="submit" class="login-btn">Sign Up</button>
            </form>
        </div>
    </div>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include"partials/connect.php";
    $user_entered = $_POST['username'];
    $pass_entered = $_POST['password'];

    // Prepare a SQL query to fetch the user with entered username
    $sql = "SELECT id, user_name, password FROM user WHERE user_name = '$user_entered'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists in the database
        $row = $result->fetch_assoc();
        $stored_password = $row['password']; // Password stored in the database

        // Verify the entered password against the stored password
        if ($pass_entered== $stored_password) {
            // Passwords match - authentication successful
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user_entered;
            $_SESSION['c_ID'] = $row['id'];;
            header('location: index.php');
        } else {
            echo "<script>alert('Invalid password. Please try again.')</script>";
        }
    } else {
        echo "<script>alert('User does not exist. Please register or try a different username.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>

<body>

    <div class="login-container">
        <div class="hmmm">

            <h2>Login</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <p class="la" style=color:#ffff;><a href="signup.php"     style="color: red;">Click here!</a>   for sign up</p>
                <p class="la" style=color:#ffff;><a href="admin/adminlogin.php"style="color: red;">Click here!</a>  for Admin login .</p>
                <p class="la" style=color:#ffff;><a href="index.php"style="color: red;">Click here!</a>  Back to Home Page</p>

                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </div>

</body>

</html>
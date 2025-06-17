<?php
include("../partials/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($email) && !empty($password)) {


        $hashed_password = $password;

        $sql = "INSERT INTO user (user_name, email, password) VALUES ('$username', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('user added successful!')</script>";
            header("location: customer.php");

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}

// SQL query to retrieve data from the user table
$sql = "SELECT * FROM user"; // Change 'user' to your actual table name

$result = $conn->query($sql);
if(isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM user WHERE id = $id"; // Change 'user' to your actual 
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User Deleted successful!')</script>";
        header("location: customer.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car - Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body">

    <header class="header">
        <h1>Admin Dashboard</h1>
    </header>

    <?php include("partials/nav.php"); ?>

    <section class="section">
        <form method="POST" id="addCarForm" class="form">
            <label for="Name" class="label">User Name:</label>
            <input type="text" id="Name" name="Name" required class="input">

            <label for="email" class="label">Email:</label>
            <input type="text" id="email" name="email" required class="input">

            <label for="password" class="label">Password:</label>
            <input type="text" id="password" name="password" required class="input">

            <button type="submit" class="button">Add User</button>
        </form>

        <table class="table">
            <thead>

                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <?php echo '' . $row['user_name'] . '' ?>
                            </td>
                            <td>
                                <?php echo '' . $row['email'] . '' ?>
                            </td>
                            <td>
                                <?php echo '' . $row['password'] . '' ?>
                            </td>
                            
                                <td><a href="customer.php?id=<?php echo '' . $row['id'] . '' ?>"><button class="button delete">Delete</button></a></td>
                            
                        </tr>
                    <?php }
                } ?>
            </tbody>
        </table>
    </section>

</body>

</html>
<?php
include("../partials/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $rental_price = $_POST['rental_price'];
    $Discription = $_POST['Discription'];


        $sql = "INSERT INTO `cars` (`brand`, `model`, `year`, `color`, `rental_price`, `Discription`) VALUES ('$brand', '$model', '$year', '$color', '$rental_price','$Discription');";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Car Added successful!')</script>";
            header("location: cars.php");

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

// SQL query to retrieve data from the user table
$sql = "SELECT * FROM cars"; // Change 'user' to your actual table name

$result = $conn->query($sql);
if(isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM cars WHERE id = $id"; // Change 'user' to your actual 
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Car Deleted successful!')</script>";
        header("location: cars.php");
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
      <label for="brand" class="label">Car Name:</label>
      <input type="text" id="brand" name="brand" required class="input">

      <label for="model" class="label">model:</label>
      <input type="text" id="model" name="model" required class="input">

      <label for="year" class="label">year:</label>
      <input type="text" id="year" name="year" required class="input">
      
      <label for="color" class="label">Color:</label>
      <input type="text" id="color" name="color" required class="input">
      
      <label for="rental_price" class="label">rental_price:</label>
      <input type="text" id="rental_price" name="rental_price" required class="input">
      <label for="Discription" class="label">Discription:</label>
      <input type="text" id="Discription" name="Discription" required class="input">

      <button type="submit" class="button">Add Car</button>
    </form>

    <table class="table">
      <thead>
        <tr>
          <th>Car Name</th>
          <th>color</th>
          <th>price</th>
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
                <?php echo '' . $row['brand'] . '' ?>
            </td>
            <td>
                <?php echo '' . $row['color'] . '' ?>
            </td>
            <td>
                <?php echo '' . $row['rental_price'] . '' ?>
            </td>
            
                <td><a href="cars.php?id=<?php echo '' . $row['id'] . '' ?>"><button class="button delete">Delete</button></a></td>
            
        </tr>
    <?php }
} ?>
          </tbody>
    </table>
  </section>

</body>
</html>

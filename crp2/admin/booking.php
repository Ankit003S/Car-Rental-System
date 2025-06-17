<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Booking - Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="body">

  <header class="header">
    <h1>Admin Dashboard</h1>
  </header>
  
  <?php include("partials/nav.php"); ?>

  <section class="section">

    <table class="table">
      <thead>
      <tr>
          <th>Car Id</th>
          <th>Customer Id</th>
          <th>number Of Days</th>
          <th>Prices</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
      include("../partials/connect.php");
      if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
      
        $sql = "DELETE FROM booking WHERE booking_id = $id"; // Change 'user' to your actual 
        if ($conn->query($sql) === TRUE) {
          echo "<script>alert('Record Delete successful!')</script>";
          header("location: booking.php");
        } else {
          echo "Error deleting record: " . $conn->error;
        }
      }
      
      $sql = "SELECT * FROM booking"; // Change 'user' to your actual table name

      $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td>
        <?php echo '' . $row['car_id'] . '' ?>
      </td>
      <td>
        <?php echo '' . $row['customer_id'] . '' ?>
      </td>
      <td>
        <?php echo '' . $row['numberOfDays'] . '' ?>
      </td>
      <td>
        <?php echo '' . $row['price'] . '' ?>
      </td>

      <td><a href="booking.php?id=<?php echo '' . $row['booking_id'] . '' ?>"><button class="button delete">Delete</button></a>
      </td>

    </tr>
  <?php }
} ?>
    </table>
  </section>

</body>
</html>

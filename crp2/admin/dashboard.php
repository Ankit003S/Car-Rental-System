<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header class="header">
    <h1>Admin Dashboard</h1>
  </header>

  <?php include("partials/nav.php"); ?>
  <?php include("../partials/connect.php"); ?>

  <section>
    <div class="dashboard-card">
      <h2>Total Users</h2>
      <?php
      $sql = "SELECT * FROM user";
      $result= $conn->query($sql);
      $totalUsers = mysqli_num_rows($result);
      // Replace this with your logic to fetch actual total users
      echo "<p>Total Users: " . $totalUsers . "</p>";
      ?>
    </div>

    <div class="dashboard-card">
      <h2>Total Cars</h2>
      <?php
      
      $sql = "SELECT * FROM cars";
      $result= $conn->query($sql);
      $totalCars=mysqli_num_rows($result); 
      // Replace this with your logic to fetch actual total cars
      echo "<p>Total Cars: " . $totalCars . "</p>";
      ?>
    </div>

    <div class="dashboard-card">
      <h2>Rental History</h2>
      <?php
      // Example PHP logic to fetch and display rental history content
      // Assuming $rentalHistoryContent contains the retrieved rental history
      $sql = "SELECT * FROM booking";
      $result= $conn->query($sql);
      $rentalHistoryContent=mysqli_num_rows($result); 
      echo "<p>" . $rentalHistoryContent . "</p>";
      ?>
    </div>
  </section>

  <footer>
    <p>&copy;
      <?php echo date("Y"); ?> Car Rental Admin
    </p>
  </footer>

</body>

</html>
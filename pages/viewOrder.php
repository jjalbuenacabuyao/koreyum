<?php

include "../php/db.php";
$sql = "SELECT * FROM deliveryid";
$result = mysqli_query($conn, $sql);

session_start();

if (!isset($_SESSION['customerId'])) {
  header("Location: ../homepage.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/styles/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/styles/menu.css" />
  <script src="../assets/js/bootstrap.min.js" defer></script>
  <title>View Orders</title>
</head>

<body class="bg-dark">
  <header class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../assets/images/logo.png" width="128" height="auto" alt="KoreYum" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active text-dark" aria-current="page" href="../home.php">Home</a>
            <a class="nav-link text-dark" href="ViewReserve.php">View Reservations</a>
            <?php
            if ($_SESSION['customerId'] === "paulo") {
              echo '<a class="nav-link" href="./ViewInvoice.php">View Daily Sales</a>';
            }
            ?>
            <a class="nav-link text-dark" href="../php/logout.php">LogOut</a>
          </div>
        </div>
      </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <div class="row">
      <div class="col m-auto">
        <div class="card mt-5">
          <div>
            <h2 class="display-6 text-center">View Deliveries</h2>
          </div>
          <table class="table table-bordered text-center">

            <tr>
              <td> Delivery No. </td>
              <td> Name </td>
              <td> Date and Time </td>
              <td> Order Set</td>
              <td> Ad-Ons</td>
              <td> Sides</td>
              <td> Drinks</td>
            </tr><br>



            <?php

            while ($row = mysqli_fetch_assoc($result)) {
              $deliveryId = $row['deliveryId'];
              $Fullname = $row['Fullname'];
              $Datetime = $row['Datetime'];
              $orderDelivery = $row['orderDelivery'];
              $adOns = $row['adOns'];
              $Sides = $row['Sides'];
              $Drinks = $row['Drinks'];

            ?>
              <tr>
                <td><?php echo $deliveryId ?></td>
                <td><?php echo $Fullname ?></td>
                <td><?php echo $Datetime ?></td>
                <td><?php echo $orderDelivery ?></td>
                <td><?php echo $adOns ?></td>
                <td><?php echo $Sides ?></td>
                <td><?php echo $Drinks ?></td>
              </tr>
            <?php
            }
            ?>


          </table>
          <h3>To cancel the delivery please contact the owner</h3>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
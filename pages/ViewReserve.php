<?php

include "../php/db.php";
$sql = "SELECT * FROM reserveid";
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
  <title>View Reservations</title>
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
            <a class="nav-link text-dark" href="vieworder.php">View Deliveries</a>
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
            <h2 class="display-6 text-center">View Reservations</h2>
          </div>
          <table class="table table-bordered text-center">

            <tr>
              <td> Reserve No. </td>
              <td> Name </td>
              <td> pax </td>
              <td> Set of Order </td>
              <td> Date and Time </td>
              <td> Cancel </td>
            </tr><br>

            <?php

            while ($row = mysqli_fetch_assoc($result)) {
              $reserveinfo = $row['reserveinfo'];
              $reserveId = $row['reserveId'];
              $pax = $row['pax'];
              $reserveOrder = $row['reserveOrder'];
              $dateTime = $row['dateTime'];

            ?>
              <tr>
                <td><?php echo $reserveinfo ?></td>
                <td><?php echo $reserveId ?></td>
                <td><?php echo $pax ?></td>
                <td><?php echo $reserveOrder ?></td>
                <td><?php echo $dateTime ?></td>
                <td>
                  <form action="../php/deletereserve.php" method="post">
                    <input type="hidden" style="display: hidden;" name="reserveId" value="<?php echo $reserveinfo ?>">
                    <button type="submit" class="btn btn-danger">Cancel</button>
                  </form>
                </td>
              </tr>
            <?php
            }
            ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<?php
session_start();

$userId = $_SESSION["id"];

if (!isset($userId)) {
  header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/styles/utility.css">
  <link rel="stylesheet" href="../assets/styles/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/styles/style.css">
  <script src="../assets/js/bootstrap.min.js" defer></script>
  <title>KoreYum | Dashboard</title>
</head>

<body class="font-primary mb-5">
  <header class="container">
    <nav class="navbar navbar-expand-lg bg-white nav">
      <div class="container-fluid p-0">
        <a class="navbar-brand" href="../index.php">
          <img src="../assets/images/logo.png" width="128" height="auto" alt="KoreYum" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNavAltMarkup">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active text-dark" aria-current="page" href="../index.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-dark" href="./menu.php">Menu</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-dark" href="./about.php">About</a>
            </li>

            <?php
            echo '
              <li class="nav-item">
                <a class="nav-link text-dark" href="./orders.php">My Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">My Reservations</a>
              </li>
              ';

            if ($_SESSION['id'] === "1") {
              echo '
              <li class="nav-item" style="padding-right: 0.5rem;">
                <a class="nav-link text-dark" href="./ViewInvoice.php">View Daily Sales</a>
              </li>';
            }

            echo '
              <li class="nav-item">
                <a href="../php/logout.php" class="btn btn-danger rounded-pill px-3 fw-bold">Log out</a>
              </li>';
            ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="container mt-5">
    <div class="wrapper d-flex flex-column gap-5">
      <!-- Orders -->
      <?php
      include "../php/db.php";

      $sql = "SELECT * FROM customerorder WHERE isCompleted=0";

      $result = mysqli_query($conn, $sql);

      $orders = array();

      while ($row = $result->fetch_assoc()) {
        array_push($orders, array($row["id"], $row["koreyumSet"], $row["addons"], $row["sides"], $row["drinks"], $row["price"]));
      }
      ?>
      <div style="padding: 1rem;border: 1px solid rgba(0, 0, 0, 50%);border-radius:1.5rem;">
        <p class="fs-4 fw-bold">Orders</p>
        <div class="table-responsive-sm">
          <table class="table-hover table-borderless table">
            <thead>
              <tr>
                <?php
                $tableHeaders = array("#", "Set", "Add-Ons", "Sides", "Drinks", "Price", "Action");
                foreach ($tableHeaders as $header) {
                  echo '<th scope="col" class="text-red-600">' . $header . '</th>';
                }
                ?>
              </tr>
            </thead>
            <tbody>
              <?php
              if (count($orders) == 0) {
                echo '
              <tr>
                <td colspan="7" class="text-center fw-bold py-5 fs-3">No Orders</td>
              </tr>
              ';
              } else {
                $count = 1;
                foreach ($orders as $order) {
                  echo '
              <tr>
                <th scope="row">' . $count . '</th>
                <td>' . $order[1] . '</td>
                <td>' . trim($order[2], ", ") . '</td>
                <td>' . trim($order[3], ", ") . '</td>
                <td>' . trim($order[4], ", ") . '</td>
                <td>₱' . number_format($order[5], 0, ".", ",") . '.00</td>
                <td>
                  <div class="d-flex gap-2">
                    <form action="../php/cancelOrder.php" method="post">
                      <input name="orderId" value="' . $order[0] . '" hidden />
                      <button type="submit" class="btn btn-danger px-3 fw-bold">Cancel</button>
                    </form>

                    <form action="../php/setOrderCompleted.php" method="post">
                      <input name="orderId" value="' . $order[0] . '" hidden />
                      <input name="price" value="' . $order[5] . '" hidden />
                      <button type="submit" class="btn btn-primary px-3 fw-bold">Completed</button>
                    </form>
                  </div>
                </td>
              </tr>
              ';
                  $count++;
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>


      <!-- Reservations -->
      <?php

      $sql = "SELECT * FROM reservation WHERE isCompleted=0";

      $result = mysqli_query($conn, $sql);

      $reservations = array();

      while ($row = $result->fetch_assoc()) {
        array_push($reservations, array($row["id"], $row["dish"], $row["addons"], $row["sides"], $row["drinks"], $row["date"], $row["price"]));
      }
      ?>

      <div style="padding: 1rem;border: 1px solid rgba(0, 0, 0, 50%);border-radius:1.5rem;">
        <p class="fs-4 fw-bold">Reservations</p>
        <div class="table-responsive-sm">
          <table class="table-hover table-borderless table">
            <thead>
              <tr>
                <?php
                $tableHeaders = array("#", "Dish", "Add-Ons", "Sides", "Drinks", "Date", "Price", "Action");
                foreach ($tableHeaders as $header) {
                  echo '<th scope="col" class="text-red-600">' . $header . '</th>';
                }
                ?>
              </tr>
            </thead>
            <tbody>
              <?php
              if (count($reservations) == 0) {
                echo '
              <tr>
                <td colspan="8" class="text-center fw-bold py-5 fs-3">No Reservations</td>
              </tr>
              ';
              } else {
                $count = 1;
                foreach ($reservations as $reservation) {
                  echo '
              <tr>
                <th scope="row">' . $count . '</th>
                <td>' . $reservation[1] . '</td>
                <td>' . trim($reservation[2], ", ") . '</td>
                <td>' . trim($reservation[3], ", ") . '</td>
                <td>' . trim($reservation[4], ", ") . '</td>
                <td>' . date('Y-m-d H:i', strtotime($reservation[5])) . '</td>
                <td>₱' . number_format($reservation[6], 0, ".", ",") . '.00</td>
                <td>
                  <div class="d-flex gap-2">
                    <form action="../php/cancelReservation.php" method="post">
                      <input name="reservationId" value="' . $reservation[0] . '" hidden />
                      <button type="submit" class="btn btn-danger px-3 fw-bold">Cancel</button>
                    </form>

                    <form action="../php/setReservationCompleted.php" method="post">
                      <input name="reservationId" value="' . $reservation[0] . '" hidden />
                      <input name="price" value="' . $reservation[6] . '" hidden />
                      <button type="submit" class="btn btn-primary px-3 fw-bold">Completed</button>
                    </form>
                  </div>
                </td>
              </tr>
              ';
                  $count++;
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Sales Report -->
    </div>
  </main>
</body>

</html>
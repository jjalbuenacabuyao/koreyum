<?php

session_start();

if (!isset($_SESSION['customerId'])) {
  header("Location: homepage.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/styles/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/styles/style.css" />
  <script src="./assets/js/bootstrap.min.js" defer></script>
  <title>KoreYum Page</title>
</head>

<body>
  <header class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./assets/images/logo.png" width="128" height="auto" alt="KoreYum" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
            <a class="nav-link text-dark" href="./pages/viewOrder.php">View Delivery</a>
            <a class="nav-link text-dark" href="./pages/ViewReserve.php">View Reservation</a>

            <?php
            if ($_SESSION['customerId'] === "paulo") {
              echo '<a class="nav-link" href="./pages/ViewInvoice.php">View Daily Sales</a>';
            }
            ?>


            <a class="nav-link text-dark" href="php/logout.php">LogOut</a>
          </div>
        </div>
      </div>
      </div>
    </nav>
  </header>

  <main class="min-vh-100 main">
    <div class="d-flex justify-content-center align-items-center">
      <div class="d-flex column-gap-4 text-center button-group">
        <a href="./pages/reserve.php" class="btn btn-primary btn-lg" role="button" style="font-size: 40px;">Make Reservation?</a>
        <a href="./pages/delivery.php" class="btn btn-primary btn-lg" role="button" style="font-size: 40px;">Order Delivery?</a>
      </div>
    </div>

    <div class="features container-fluid">
      <div class="row justify-content-center">
        <div class="col text-center">
          <img class="rounded" src="./assets/images/samgyeopsal.png" alt="" />
          <h1 class="text-white fs-4">Unlimited Samgyeopsal</h1>
        </div>

        <div class="col text-center">
          <img class="rounded" src="./assets/images/soju.png" alt="" />
          <h1 class="text-white fs-4">Korean Soju</h1>
        </div>

        <div class="col text-center">
          <img class="rounded" src="./assets/images/milktea.png" alt="" />
          <h1 class="text-white fs-4">Unlimited Milktea</h1>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
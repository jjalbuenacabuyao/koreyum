<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="./assets/styles/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/styles/style.css" />
  <link rel="stylesheet" href="./assets/styles/utility.css">
  <script src="./assets/js/bootstrap.min.js" defer></script>
  <title>KoreYum</title>
  <style>
    #carousel {
      z-index: -1;
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
      opacity: 20%;
      height: 100vh;
    }
  </style>
</head>

<body class="font-primary" data-body style="position: relative;">
  <?php include "./components/header.php" ?>

  <div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner rounded">
      <div class="carousel-item active w-100" data-bs-interval="3000">
        <img src="./assets/images/bg.png" class="d-block w-100 object-cover" style="height: 100vh;" alt="...">
      </div>
      <div class="carousel-item w-100" data-bs-interval="3000">
        <img src="./assets/images/banner.png" class="d-block w-100 object-cover" style="height: 100vh;" alt="...">
      </div>
      <div class="carousel-item w-100" data-bs-interval="3000">
        <img src="./assets/images/unli-pork-samgyup.jpg" class="d-block w-100 object-cover" style="height: 100vh;" alt="...">
      </div>
      <div class="carousel-item w-100" data-bs-interval="3000">
        <img src="./assets/images/for-hero1.jpg" class="d-block w-100 object-cover" style="height: 100vh;" alt="...">
      </div>
      <div class="carousel-item w-100" data-bs-interval="3000">
        <img src="./assets/images/for-hero2.jpg" class="d-block w-100 object-cover" style="height: 100vh;" alt="...">
      </div>
    </div>
  </div>

  <main class="d-flex flex-column gap-5">
    <div class="container min-vh-100">
      <div class="row flex-column flex-md-row gap-5 align-items-center" style="padding-top: 5.25rem;">
        <div class="col col-md-5 pt-5 pt-md-0">
          <h1 class="text-red-600 font-secondary fw-bold hero-title">KoreYum Grill and Restaurant</h1>
          <p class="fs-5 mb-4">Unlimited eat all you can!</p>
          <div class="d-flex align-items-md-center gap-3 flex-column flex-md-row">
            <a class="btn bg-red-600 text-white fw-bold px-4 py-2" style="--bs-btn-hover-bg: #991b1b;" href="
            <?php
            if (isset($_SESSION["id"])) {
              echo "./pages/menu.php";
            } else {
              echo "./pages/login.php";
            }
            ?>">
              Order Now
            </a>

            <a class="btn btn-outline-secondary fw-bold px-4 py-2 text-black" style="--bs-btn-hover-bg: rgba(0, 0, 0, 15%);" href="
            <?php
            if (isset($_SESSION["id"])) {
              echo "./pages/menu.php#reservations";
            } else {
              echo "./pages/login.php";
            }
            ?>">
              Reserve
            </a>
          </div>
        </div>
        <div class="col max-h-75">
          <?php include './components/carousel.php' ?>
        </div>
      </div>
    </div>
    <!-- Menu -->
    <div class="container d-flex flex-column gap-5" id="menu">
      <div class="row">
        <h2 class="fw-bold font-secondary menu-title text-center">Menu</h2>
      </div>

      <div class="row">
        <h3 class="fw-bold menu-subtitle">KoreYum Sets</h3>
        <div class="d-flex flex-column gap-4 set-container">
          <?php
          include "./components/card.php";
          $sets = array("KoreYum Set 1 (2 to 3 persons)" => "./assets/images/unli-shabu-shabu.jpg", "KoreYum Set 2 (4 to 5 persons)" => "./assets/images/koreyum-ultimate.jpg");

          foreach ($sets as $set => $setImg) {
            if (str_contains($set, "Set 1")) {
              renderCard($setImg, $set, 499, "set");
              continue;
            }
            renderCard($setImg, $set, 999, "set");
          }
          ?>
        </div>
      </div>

      <div class="row">
        <h3 class="fw-bold menu-subtitle">Reservations</h3>
        <div class="d-flex flex-column gap-4 addons-container" style="grid-template-columns: repeat(3, 1fr)!important;">
          <?php
          $menus = array("Unli-Pork Samgyup" => "./assets/images/pork.jpg", "Unli-Beef Samgyup" => "./assets/images/unli-beef-samgyup.jpg", "Unli-Pork and Beef Samgyup" => "./assets/images/pork-and-beef.jpg", "Unli Shabu-Shabu" => "./assets/images/unli-shabu-shabu.jpg", "KoreYum Ultimate" => "./assets/images/koreyum-ultimate.jpg");

          foreach ($menus as $menu => $img) {
            renderCard($img, $menu, 249, "reservation");
          }
          ?>
        </div>
      </div>

      <!-- Add-Ons -->
      <div class="row">
        <h3 class="fw-bold menu-subtitle">Add-ons</h3>
        <div class="d-flex flex-column gap-4 addons-container">
          <?php
          $addOns = array("Pork (Plain)", "Pork (Bulgogi)", "Pork (Spicy)", "Beef (Plain)", "Beef (Bulgogi)", "Beef (Spicy)");

          foreach ($addOns as $addOn) {
            if (str_contains($addOn, "Pork")) {
              renderCard("./assets/images/unli-pork-samgyup.jpg", $addOn, 120, "addons");
              continue;
            }
            renderCard("./assets/images/unli-beef-samgyup.jpg", $addOn, 150, "addons");
          }
          ?>
        </div>
      </div>

      <!-- Sides -->
      <div class="row">
        <h3 class="fw-bold menu-subtitle">Sides</h3>
        <div class="d-flex flex-column gap-4 addons-container">
          <?php
          $sides = array("Korean Braised Tofu" => 100, "Korean Kimchi" => 100, "Lettuce" => 100, "Cucumber" => 50, "Carrots" => 50, "Ssamjang (Sweet Sauce)" => 50, "Gochujang (Spicy Sause)" => 50, "Cheese Sauce" => 50, "Potato Marble" => 70, "Rice" => 20);

          $sidesImages = array("./assets/images/braised-tofu.jpg", "./assets/images/kimchi.webp", "./assets/images/lettuce.jpg", "./assets/images/cucumber.jpg", "./assets/images/carrots.webp", "./assets/images/ssamjang.jpg", "./assets/images/gochujang.jpg", "./assets/images/carrots.webp", "./assets/images/potato-marble.png", "./assets/images/rice.jpg");

          $index = 0;
          foreach ($sides as $side => $price) {
            renderCard($sidesImages[$index], $side, $price, "sides");
            $index++;
          }
          ?>
        </div>
      </div>

      <div class="row">
        <h3 class="fw-bold menu-subtitle">Drinks</h3>
        <div class="d-flex flex-column gap-4 addons-container drinks-container">
          <?php
          $drinks = array("Coca-Cola" => 40, "Juice" => 40, "Sprite" => 40, "Royal" => 40, "Soju" => 120);

          $drinksImages = array("./assets/images/coke.webp", "./assets/images/juice.jpg", "./assets/images/sprite.webp", "./assets/images/royal.webp", "./assets/images/soju.jpg");

          $index = 0;
          foreach ($drinks as $side => $price) {
            renderCard($drinksImages[$index], $side, $price, "drinks");
            $index++;
          }
          ?>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="container d-flex flex-column align-items-center">
      <img src="./assets/images/logo.png" width="128" height="auto" alt="KoreYum" />
      <p class="text-center">&copy; 2023 KoreYum. All rights reserved.</p>
    </footer>
  </main>

  <dialog id="orderDialog" data-isOpen="false">
    <header class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fs-4 mb-0">Select your order</h1>
      <button data-trigger="closeOrder" style="all: unset;">
        <i class="bi bi-x-circle fs-3"></i>
      </button>
    </header>
    <form action="./php/setOrders.php" class="d-flex flex-column gap-4" method="post">
      <div>
        <h2 class="text-red-600 fw-bold">KoreYum Sets</h2>
        <div data-setContainerOrder></div>
      </div>

      <div>
        <h2 class="text-red-600 fw-bold">Add-ons</h2>
        <div data-addonsContainerOrder></div>
      </div>

      <div>
        <h2 class="text-red-600 fw-bold">Sides</h2>
        <div data-sidesContainerOrder></div>
      </div>

      <div>
        <h2 class="text-red-600 fw-bold">Drinks</h2>
        <div data-drinksContainerOrder></div>
      </div>

      <div class="d-flex justify-content-end gap-3 mt-2">
        <button type="button" data-trigger="closeOrder" class="btn btn-outline-secondary">Cancel</button>
        <button data-orderConfirmationButton type="button" class="btn bg-red-600 text-white fw-bold px-3">Submit</button>
      </div>

      <dialog id="orderConfirmationDialog" data-orderConfirmationDialog>
        <header class="d-flex justify-content-between align-items-center mb-4">
          <h1 class="fs-4 mb-0">Confirm your order</h1>
          <button type="button" data-closeOrderConfirmation style="all: unset;">
            <i class="bi bi-x-circle fs-3"></i>
          </button>
        </header>

        <div>
          <h2 class="fs-5 mb-0 fw-bold">Set</h2>
          <p data-selectedSet></p>
        </div>

        <div>
          <h2 class="fs-5 mb-0 fw-bold">Add-Ons</h2>
          <p data-selectedAddOns></p>
        </div>

        <div>
          <h2 class="fs-5 mb-0 fw-bold">Sides</h2>
          <p data-selectedSides></p>
        </div>

        <div>
          <h2 class="fs-5 mb-0 fw-bold">Drinks</h2>
          <p data-selectedDrinks></p>
        </div>

        <div class="d-flex justify-content-end gap-3 mt-2">
          <button type="button" data-closeOrderConfirmation class="btn btn-outline-secondary">Cancel</button>
          <button type="submit" class="btn bg-red-600 text-white fw-bold px-3">Confirm</button>
        </div>
      </dialog>
    </form>
  </dialog>

  <dialog id="reservationDialog">
    <header class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fs-4 mb-0">Select your Reservation</h1>
      <button data-trigger="closeReservation" style="all: unset;">
        <i class="bi bi-x-circle fs-3"></i>
      </button>
    </header>
    <form action="./php/setReservations.php" class="d-flex flex-column gap-4" method="post">
      <div>
        <h2 class="text-red-600 fw-bold">KoreYum Reservations</h2>
        <div data-reservationsContainer></div>
      </div>

      <div>
        <h2 class="text-red-600 fw-bold">Add-ons</h2>
        <div data-addonsContainerReservation></div>
      </div>

      <div>
        <h2 class="text-red-600 fw-bold">Sides</h2>
        <div data-sidesContainerReservation></div>
      </div>

      <div>
        <h2 class="text-red-600 fw-bold">Drinks</h2>
        <div data-drinksContainerReservation></div>
      </div>

      <div>
        <h2 class="text-red-600 fw-bold">Date and Time</h2>
        <input id="dateAndTime" type="datetime-local" min="<?php echo date("o-m-d\TH:i", null); ?>" name="dateAndTime" required />
      </div>

      <div class="d-flex justify-content-end gap-3 mt-2">
        <button type="button" data-trigger="closeReservation" class="btn btn-outline-secondary">Cancel</button>
        <button type="submit" class="btn bg-red-600 text-white fw-bold px-3">Submit</button>
      </div>
    </form>
  </dialog>
</body>

<script src="./assets/js/toggleDialog.js" type="module"></script>
<script src="./assets/js/renderSetsRadioButtonElements.js"></script>
<script src="./assets/js/renderCheckboxes.js" type="module"></script>
<script type="module" src="./assets/js/renderReservationsRadioButtonElements.js"></script>
<script type="module" src="./assets/js/toggleConfirmationModal.js"></script>

</html>
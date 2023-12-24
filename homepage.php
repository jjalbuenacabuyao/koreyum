<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/styles/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/styles/style.css" />
  <link rel="stylesheet" href="./assets/styles/utility.css">
  <script src="./assets/js/bootstrap.min.js" defer></script>
  <title>KoreYum</title>
</head>

<body class="font-primary">
  <?php include "./components/header.php" ?>

  <main class="d-flex flex-column gap-5">
    <div class="container min-vh-100">
      <div class="row flex-column flex-md-row gap-5 align-items-center" style="padding-top: 5.25rem;">
        <div class="col col-md-5 pt-5 pt-md-0">
          <h1 class="text-red-600 font-secondary fw-bold hero-title">KoreYum Grill and Restaurant</h1>
          <p class="fs-5 mb-4">Unlimited eat all you can!</p>
          <div class="d-flex align-items-md-center gap-3 flex-column flex-md-row">
            <button class="btn bg-red-600 text-white fw-bold px-4 py-2" style="--bs-btn-hover-bg: #991b1b;">Order Now</button>
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
        <div class="d-flex flex-column gap-4 addons-container">
          <?php
          $menus = array("Unli-Pork Samgyup" => "./assets/images/unli-pork-samgyup.jpg", "Unli-Beef Samgyup" => "./assets/images/unli-beef-samgyup.jpg", "Unli-Pork and Beef Samgyup" => "./assets/images/unli-pork-and-beef-samgyup.jpg", "Unli Shabu-Shabu" => "./assets/images/unli-shabu-shabu.jpg", "KoreYum Ultimate" => "./assets/images/koreyum-ultimate.jpg");

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
          $drinks = array("Coca Cola" => 40, "Juice" => 40, "Sprite" => 40, "Royal" => 40, "Soju" => 120);

          $drinksImages = array("./assets/images/coke.webp", "./assets/images/juice.jpg", "./assets/images/sprite.webp", "./assets/images/royal.webp", "./assets/images/soju.webp");

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
</body>

</html>
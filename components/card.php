<?php
function renderCard($imageSrc, $title, $price, $type)
{
  $url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

  $buttonText = "Order";

  if ($type === "reservation") {
    $buttonText = "Reserve";
  }

  if ($type === "set") {
    $btn = "";

    if ($url === "http://localhost/koreyum/homepage.php" && (!isset($_SESSION["id"]))) {
      $btn = '<a href="./pages/login.php" class="btn btn-danger">' . $buttonText . '</a>';
    } else {
      $btn = '<button data-trigger="order" data-target="'.$title.'" class="btn btn-danger">' . $buttonText . '</button>';
    }

    echo '<div class="card shadow">
    <img src=' . $imageSrc . ' class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title font-secondary text-red-600 fw-bold" style="color: #dc2626!important;">' . $title . '</h4>
      <p class="card-text">Includes choice of 2 meat variants (500grams each), Braised Tofu, Korean Kimchi, Lettuce, Cucumber, Garlic, Ssamjang,Gochujang, Cheese Sauce and Potato Marbbles.</p>
      <p class="fw-bold">₱' . $price . '.00</p>'
      . $btn .
      '</div>
  </div>';
    return;
  }

  if ($type === "reservation") {
    $description = "Includes choice of Pork Meat flavor, Braised Tofu, Kimchi, Potato Marble, Lettuce, Cucumber, Carrots, Samjang, Gochujang, Cheese Sauce.";

    $btn = "";

    if ($url === "http://localhost/koreyum/homepage.php" && (!isset($_SESSION["id"]))) {
      $btn = '<a href="./pages/login.php" class="btn btn-danger">' . $buttonText . '</a>';
    } else {
      $btn = '<button data-trigger="reserve" data-target="'.$title.'" class="btn btn-danger">' . $buttonText . '</button>';
    }

    if ($title === "Unli Shabu-Shabu") {
      $price = 349;
      $description = "Includes choice of Meat Flavors, Vegetables, Noodles, Mushroom, Crabstick, Lubster Balls.";
    } else {
      $description = "Includes choice of Pork and Beef Meat Flavor for Samgyupsal and Shabu Shabu Hotpot, Everything Unlimited.";
    }

    switch ($title) {
      case "Unli-Pork Samgyup":
        $price = 249;
        break;
      case "Unli-Beef Samgyup":
        $price = 399;
        break;
      case "Unli-Pork and Beef Samgyup":
        $price = 449;
        break;
      default:
        $price = 349;
    }

    echo '<div class="card shadow">
    <img src=' . $imageSrc . ' class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title font-secondary text-red-600 fw-bold" style="color: #dc2626!important;">' . $title . '</h4>
      <p class="card-text">' . $description . '</p>
      <p class="fw-bold">₱' . $price . '.00</p>
      ' . $btn . '
    </div>
  </div>';
    return;
  }

  echo '<div class="card shadow">
  <img src=' . $imageSrc . ' class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title font-secondary text-red-600 fw-bold" style="color: #dc2626!important;">' . $title . '</h4>
    <p class="fw-bold">₱' . $price . '.00</p>
  </div>
</div>';
}

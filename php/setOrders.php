<?php
include 'db.php';
session_start();

$set = $_POST["set"];
$addOns = $_POST["addons"];
$sides = $_POST["sides"];
$drinks = $_POST["drinks"];

$totalPrice = 0;

if ($set === "KoreYum Set 1 (2 to 3 persons)") {
  $totalPrice += 499;
} else {
  $totalPrice += 999;
}

$selectedAddons = "";

foreach ($addOns as $selectedAddon) {
  $selectedAddons = $selectedAddon."&";

  switch ($selectedAddon) {
    case "Pork (Plain)" || "Pork (Bulgogi)" || "Pork (Spicy)":
      $totalPrice += 120;
      break;
    
    default:
    $totalPrice += 150;
  }
}

$selectedSides = "";

foreach ($sides as $selectedSide) {
  $selectedSides = $selectedSide."&";

  switch ($selectedSide) {
    case "Korean Braised Tofu" || "Korean Kimchi" || "Lettuce":
      $totalPrice += 100;
      break;

    case "Potato Marble":
      $totalPrice += 70;
      break;
    
    case "Rice":
      $totalPrice += 20;
      break;

    default:
      $totalPrice += 50;
  }
}

$selectedDrinks = "";

foreach ($drinks as $selectedDrink) {
  $selectedDrinks = $selectedDrink."&";

  if ($selectedDrink === "Soju") {
    $totalPrice += 120;
  } else {
    $totalPrice += 40;
  }
}

$userId = $_SESSION["id"];

$sql = "INSERT INTO customerorder (koreyumSet, addons, sides, drinks, userId, price) VALUES ('$set', '$selectedAddons', '$selectedSides', '$selectedDrinks', '$userId', '$totalPrice')";

$result = mysqli_query($conn, $sql);

$conn -> close();

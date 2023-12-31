<?php
include 'db.php';
session_start();

$set = $_POST["set"];
$addOns = $_POST["addons"];
$sides = $_POST["sides"];
$drinks = $_POST["drinks"];
$dateAndTime = $_POST["dateAndTime"];

$totalPrice = 0;

switch ($set){
  case "Unli-Pork Samgyup":
    $totalPrice += 249;
    break;
  
  case "Unli-Beef Samgyup":
    $totalPrice += 399;
    break;

  case "Unli-Pork and Beef Samgyup":
    $totalPrice += 449;
    break;

  default:
    $totalPrice += 349;
}

$selectedAddons = "";

foreach ($addOns as $selectedAddon) {
  $selectedAddons = $selectedAddons.$selectedAddon.", ";

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
  $selectedSides = $selectedSides.$selectedSide.", ";

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
  $selectedDrinks = $selectedDrinks.$selectedDrink.", ";

  if ($selectedDrink === "Soju") {
    $totalPrice += 120;
  } else {
    $totalPrice += 40;
  }
}

$userId = $_SESSION["id"];

$sql = "INSERT INTO reservation (dish, addons, sides, drinks, price, date, userId) VALUES ('$set', '$selectedAddons', '$selectedSides', '$selectedDrinks', '$totalPrice', '$dateAndTime', '$userId')";

$result = mysqli_query($conn, $sql);

header("Location: ../pages/menu.php");

$conn -> close();

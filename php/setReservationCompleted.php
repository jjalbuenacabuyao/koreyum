<?php
include "./db.php";

$reservationId = $_POST["reservationId"];
$price = (int) $_POST["price"];

$sql = "DELETE FROM reservation WHERE id='$reservationId'";
$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM sales";
$result = mysqli_query($conn, $sql);

$currentTotalPrice = 0;
while ($row = $result->fetch_assoc()) {
  $currentTotalPrice = (int) $row["totalSales"];
}

$newTotalSales = $currentTotalPrice + $price;
$sql = "UPDATE sales SET totalSales='$newTotalSales' WHERE id=1";

$result = mysqli_query($conn, $sql);

header("Location: ../pages/dashboard.php");

$conn->close();

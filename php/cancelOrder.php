<?php
include "./db.php";

$orderId = $_POST["orderId"];

$sql = "DELETE FROM customerorder WHERE id='$orderId'";

$result = mysqli_query($conn, $sql);

header("Location: ../pages/orders.php");

$conn -> close();


<?php

include 'db.php';

if (isset($_POST['submit'])) {
	$deliveryId = $_POST['deliveryId'];
	$Fullname = $_POST['Fullname'];
	$Datetime = $_POST['Datetime'];
	$deliveryAddress = $_POST['deliveryAddress'];
	$orderDelivery = $_POST['orderDelivery'];
	$adOns = $_POST['adOns'];
	$Sides = $_POST['Sides'];
	$Drinks = $_POST['Drinks'];


	$sql = "INSERT INTO `deliveryid`(`deliveryId`, `Fullname`, `Datetime`, `deliveryAddress`, `orderDelivery`, `adOns`, `Sides`, `Drinks`) VALUES ('$deliveryId','$Fullname','$Datetime','$deliveryAddress','$orderDelivery','$adOns','$Sides','$Drinks')";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo "Ordered";
		header("Location: ../home.php?Ordered");
	} else {
		echo "Did not Order";
		exit();
	}
}

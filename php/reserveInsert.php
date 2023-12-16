<?php

include 'db.php';

if (isset($_POST['submit'])) {
	$reserveId = $_POST['reserveId'];
	$pax = $_POST['pax'];
	$reserveOrder = $_POST['reserveOrder'];
	$dateTime = $_POST['dateTime'];


	$sql = "INSERT INTO `reserveid`(`reserveId`, `pax`, `reserveOrder`, `dateTime`) VALUES ('$reserveId','$pax','$reserveOrder','$dateTime')";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo "Reserved";
		header("Location: ../home.php?Reserved");
	} else {
		echo "Did not Reserve";
		exit();
	}
}

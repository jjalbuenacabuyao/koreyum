<?php

include 'db.php';

if (isset($_POST['submit'])) {
	$customerId = $_POST['customerId'];
	$password = $_POST['password'];
	$fullName = $_POST['fullName'];
	$address = $_POST['address'];
	$contactNo = $_POST['contactNo'];
	$Email = $_POST['Email'];

	$sql = "INSERT INTO `cusid`(`customerId`, `password`, `fullName`, `address`, `contactNo`, `Email`) VALUES ('$customerId','$password','$fullName','$address','$contactNo','$Email')";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo "Registered";
		header("Location: ../homepage.php?Registered");
	} else {
		echo "Did not Register";
		exit();
	}
}

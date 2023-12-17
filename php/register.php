<?php

include 'db.php';

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];
	$contactNumber = $_POST['contact-number'];

	$sql = "INSERT INTO user (id, email, password, fullname, address, contactNumber) VALUES (NULL, '$email', '$password', '$fullname', '$address', '$contactNumber')";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo "Registered";
		header("Location: ../homepage.php?Registered");
	} else {
		echo "Did not Register";
		exit();
	}
}

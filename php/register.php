<?php

include 'db.php';

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];
	$contactNumber = $_POST['contact-number'];

	$sql = "SELECT * FROM user WHERE email='$email'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result)) {
		header("Location: ../pages/register.php?error=email already exist");
		exit();
	}

	$sql = "INSERT INTO user (id, email, password, fullname, address, contactNumber) VALUES (NULL, '$email', '$password', '$fullname', '$address', '$contactNumber')";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		header("Location: ../pages/login.php");
	} else {
		echo "Did not Register";
	}

	exit();
}

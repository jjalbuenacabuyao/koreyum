<?php
session_start();

include "db.php";

$emailInput = $_POST['email'];
$passwordInput = $_POST['password'];

if (!(isset($emailInput) && isset($passwordInput))) {
    header("Location: ../homepage.php");
    exit();
}

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$email = validate($_POST['email']);
$password = validate($_POST['password']);

if (empty($email)) {
    header("Location: ../homepage.php?error=customerId is required");
    exit();
}

if (empty($password)) {
    header("Location: ../homepage.php?error=password is required");
    exit();
}


$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) !== 1) {
    header("Location: ../homepage.php?error=Incorect customerId or password");
    exit();
}

$row = mysqli_fetch_assoc($result);

if (!($row['email'] === $email && $row['password'] === $password)) {
    header("Location: ../homepage.php?error=Incorect customerId or password");
    exit();
}

echo "Logged in!";
$_SESSION['id'] = $row['id'];
$_SESSION['fullname'] = $row['fullname'];
$_SESSION['address'] = $row['address'];
$_SESSION['email'] = $row['email'];
$_SESSION['contactNumber'] = $row['contactNumber'];
header("Location: ../homepage.php");
exit();

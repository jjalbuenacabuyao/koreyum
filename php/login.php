<?php
session_start();

include "db.php";

$emailInput = $_POST['email'];
$passwordInput = $_POST['password'];

if (!(isset($emailInput) && isset($passwordInput))) {
    header("Location: ../pages/login.php");
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
    header("Location: ../pages/login.php?error=email is required");
    exit();
}

if (empty($password)) {
    header("Location: ../pages/login.php?error=password is required");
    exit();
}


$sql = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) !== 1) {
    header("Location: ../pages/login.php?error=User does not exist");
    exit();
}

$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if (!($row['password'] === $password)) {
    header("Location: ../pages/login.php?error=Incorect password");
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

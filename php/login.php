<?php
session_start();

include "db.php";

if (isset($_POST['customerId']) && isset($_POST['password'])) {

    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    $customerId = validate($_POST['customerId']);

    $password = validate($_POST['password']);

    if (empty($customerId)) {

        header("Location: ../homepage.php?error=customerId is required");

        exit();
    } else if (empty($password)) {

        header("Location: ../homepage.php?error=password is required");

        exit();
    } else {

        $sql = "SELECT * FROM cusid WHERE customerId='$customerId' AND password='$password'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['customerId'] === $customerId && $row['password'] === $password) {
                echo "Logged in!";

                $_SESSION['customerId'] = $row['customerId'];
                $_SESSION['fullName'] = $row['fullName'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['Email'] = $row['Email'];

                header("Location: ../home.php");
                exit();
            } else {
                header("Location: ../homepage.php?error=Incorect customerId or password");

                exit();
            }
        } else {

            header("Location: ../homepage.php?error=Incorect customerId or password");

            exit();
        }
    }
} else {

    header("Location: ../homepage.php");

    exit();
}

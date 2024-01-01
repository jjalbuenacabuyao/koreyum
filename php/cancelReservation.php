<?php
include "./db.php";

$reservationId = $_POST["reservationId"];

$sql = "DELETE FROM reservation WHERE id='$reservationId'";

$result = mysqli_query($conn, $sql);

header("Location: ../pages/reservations.php");

$conn->close();

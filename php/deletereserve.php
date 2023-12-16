<?php
// Include database connection
include 'db.php';


// Delete record from the database
$reserveId = $_POST['reserveId'];

$sql = "DELETE FROM reserveid WHERE reserveinfo=$reserveId";
$result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: ../pages/ViewReserve.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

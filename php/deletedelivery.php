<?php
// Include database connection
include 'db.php';


// Delete record from the database
$deliveryId = $_POST['deliveryId'];

$sql = "DELETE FROM deliveryid WHERE deliveryId=$deliveryId";
$result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: ../pages/viewOrder.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

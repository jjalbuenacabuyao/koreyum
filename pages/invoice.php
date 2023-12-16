<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap.min.css">
	<title>KoreYum</title>
</head>

<body>
	<h1 class="text-center">Order Invoice</h1>
	<?php
	include "../php/deliveryInsert.php";
	include "../php/db.php";

	$sql = "SELECT * FROM orderset WHERE setName='$orderDelivery'";

	$result = mysqli_query($conn, $sql);

	echo "Value: " . $orderDelivery;

	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			echo $row["price"];
		}
	} else {
		echo "0 results";
	}

	?>
</body>

</html>
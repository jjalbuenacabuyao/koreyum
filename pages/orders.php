<?php
session_start();

$userId = $_SESSION["id"];

if (!isset($userId)) {
  header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/styles/utility.css">
  <link rel="stylesheet" href="../assets/styles/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/styles/style.css">
  <script src="../assets/js/bootstrap.min.js" defer></script>
  <title>KoreYum | Orders</title>
</head>

<body class="font-primary m-5">
  <main class="container">
    <h1 class="fw-bold font-secondary mb-3 text-center">My Orders</h1>
    <?php
    include "../php/db.php";

    $sql = "SELECT * FROM customerorder WHERE userId='$userId'";

    $result = mysqli_query($conn, $sql);

    $orders = array();

    while($row = $result->fetch_assoc()) {
      array_push($orders, array($row["id"], $row["koreyumSet"], $row["addons"], $row["sides"], $row["drinks"], $row["price"]));
    }
    ?>

    <table class="table table-hover table-borderless">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Set</th>
          <th scope="col">Add-Ons</th>
          <th scope="col">Sides</th>
          <th scope="col">Drinks</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $count = 1;
        foreach ($orders as $order) {
          echo '
          <tr>
            <th scope="row">'.$count.'</th>
            <td>'.$order[1].'</td>
            <td>'.$order[2].'</td>
            <td>'.$order[3].'</td>
            <td>'.$order[4].'</td>
            <td>₱'.$order[5].'.00</td>
            <td>
              <form action="../php/cancelOrder.php" method="post">
                <input name="orderId" value="'.$order[0].'" hidden />
                <button type="submit" class="btn btn-danger px-3 fw-bold">Cancel</button>
              </form>
            </td>
          </tr>
          ';
          $count++;
        }
        ?>
      </tbody>
    </table>
  </main>
</body>

</html>
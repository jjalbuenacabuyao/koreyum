<?php

include "../php/db.php";
$sql = "SELECT * FROM deliveryid";
$result = mysqli_query($conn, $sql);

session_start();

if ($_SESSION['customerId'] !== "paulo") {
    header("Location: ../homepage.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/styles/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/styles/menu.css" />
    <script src="../assets/js/bootstrap.min.js" defer></script>
    <title>View Invoice</title>
</head>

<body class="bg-dark">
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg bg-body-tertiary nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../assets/images/logo.png" width="128" height="auto" alt="KoreYum" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active text-dark" aria-current="page" href="../home.php">Home</a>
                        <a class="nav-link text-dark" href="./viewOrder.php">View Delivery</a>
                        <a class="nav-link text-dark" href="./ViewReserve.php">View Reservation</a>
                        <a class="nav-link text-dark" href="../php/logout.php">LogOut</a>
                    </div>
                </div>
            </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <div>
                        <h2 class="display-6 text-center">View Daily Sales</h2>
                    </div>
                    <table class="table table-bordered text-center">

                        <tr>
                            <td> Delivery No. </td>
                            <td> Name </td>
                            <td> Date and Time </td>
                            <td> Delivery Address </td>
                            <td> Order Set Price</td>
                            <td> Ad-Ons Price</td>
                            <td> Sides Price</td>
                            <td> Drinks Price</td>
                            <td> Cancel </td>
                        </tr><br>



                        <?php
                        $total = 0;

                        while ($row = mysqli_fetch_assoc($result)) {
                            $deliveryId = $row['deliveryId'];
                            $Fullname = $row['Fullname'];
                            $Datetime = $row['Datetime'];
                            $deliveryAddress = $row['deliveryAddress'];
                            $orderDelivery = $row['orderDelivery'];
                            $adOns = $row['adOns'];
                            $Sides = $row['Sides'];
                            $Drinks = $row['Drinks'];

                        ?>
                            <tr>
                                <td><?php echo $deliveryId ?></td>
                                <td><?php echo $Fullname ?></td>
                                <td><?php echo $Datetime ?></td>
                                <td><?php echo $deliveryAddress ?></td>
                                <td><?php if ($orderDelivery == "Koreyum set1") {
                                        echo "649";
                                    } elseif ($orderDelivery == "KoreYum set2") {
                                        echo "1099";
                                    } else {
                                        echo "none";
                                    }
                                    ?></td>
                                <td><?php if ($adOns == "Pork (Plain)") {
                                        echo "150";
                                    } elseif ($adOns == "Pork (Bulgogi)") {
                                        echo "150";
                                    } elseif ($adOns == "Pork (Spicy)") {
                                        echo "150";
                                    } elseif ($adOns == "Beef (Plain)") {
                                        echo "180";
                                    } elseif ($adOns == "Beef (Bulgogi)") {
                                        echo "180";
                                    } elseif ($adOns == "Beef (Spicy)") {
                                        echo "180";
                                    } else {
                                        echo "none";
                                    }
                                    ?></td>
                                <td><?php if ($Sides == "Korean Braised Tofu") {
                                        echo "100";
                                    } elseif ($Sides == "Korean Kimchi") {
                                        echo "100";
                                    } elseif ($Sides == "Lettuce") {
                                        echo "100";
                                    } elseif ($Sides == "Cucumber") {
                                        echo "50";
                                    } elseif ($Sides == "Carrots") {
                                        echo "50";
                                    } elseif ($Sides == "Ssamjang (Sweet Sauce)") {
                                        echo "50";
                                    } elseif ($Sides == "Gochujang (Spicy Sause)") {
                                        echo "50";
                                    } elseif ($Sides == "Potato Marble") {
                                        echo "70";
                                    } elseif ($Sides == "Rice") {
                                        echo "20";
                                    } else {
                                        echo "none";
                                    } ?></td>
                                <td><?php if ($Drinks == "Coca Cola") {
                                        echo "40";
                                    } elseif ($Drinks == "Juice") {
                                        echo "40";
                                    } elseif ($Drinks == "Sprite") {
                                        echo "40";
                                    } elseif ($Drinks == "Royal") {
                                        echo "40";
                                    } elseif ($Drinks == "Soju") {
                                        echo "120";
                                    } else {
                                        echo "none";
                                    } ?></td>
                                <td>
                                    <form action="../php/deletedelivery.php" method="post">
                                        <input type="hidden" style="display: hidden;" name="deliveryId" value="<?php echo $deliveryId ?>">
                                        <button type="submit" class="btn btn-danger">Cancel</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            $rowTotal = 0;
                            if ($orderDelivery == "Koreyum set1") {
                                $rowTotal += 649;
                            } elseif ($orderDelivery == "KoreYum set2") {
                                $rowTotal += 1099;
                            }

                            // Add the price of adOns
                            if ($adOns == "Pork (Plain)" || $adOns == "Pork (Bulgogi)" || $adOns == "Pork (Spicy)") {
                                $rowTotal += 150;
                            } elseif ($adOns == "Beef (Plain)" || $adOns == "Beef (Bulgogi)" || $adOns == "Beef (Spicy)") {
                                $rowTotal += 180;
                            }

                            // Add the price of Sides
                            if ($Sides == "Korean Braised Tofu" || $Sides == "Korean Kimchi" || $Sides == "Lettuce") {
                                $rowTotal += 100;
                            } elseif ($Sides == "Cucumber" || $Sides == "Carrots" || $Sides == "Ssamjang (Sweet Sauce)" || $Sides == "Gochujang (Spicy Sause)") {
                                $rowTotal += 50;
                            } elseif ($Sides == "Potato Marble") {
                                $rowTotal += 70;
                            } elseif ($Sides == "Rice") {
                                $rowTotal += 20;
                            }

                            // Add the price of Drinks
                            if ($Drinks == "Coca Cola" || $Drinks == "Juice" || $Drinks == "Sprite" || $Drinks == "Royal") {
                                $rowTotal += 40;
                            } elseif ($Drinks == "Soju") {
                                $rowTotal += 120;
                            }

                            $total += $rowTotal;
                        }
                        // echo '<p>Total Price: <span class="text-lg"><php$total</span></p>'
                        ?>

                        <p>Total Price: <span style="font-size: 2rem; font-weight: 700;"><?php echo $total ?></span></p>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
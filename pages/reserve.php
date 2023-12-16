<!-- <?php

session_start();

if (!isset($_SESSION['customerId'])) {
  header("Location: ../homepage.php");
}

?> -->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/styles/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/styles/menu.css" />
  <script src="../assets/js/bootstrap.min.js" defer></script>
  <title>koreyum</title>
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <!--/Bootstrap-->
  <!--/Background design-->
  <style>
    body {
      background-color: black;
      color: white;

    }

    .sticky-form {
      position: -webkit-sticky;
      position: sticky;
      top: 250px;
      /* Change this value as needed */
      background-color: #f2f2f2;
      padding: 15px;
      border: 1px solid #ddd;
      background-color: #000;
    }
  </style>
</head>

<body>


  <!--/Navbar-->
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
            <a class="nav-link active text-dark" href="../home.php">Home</a>
            <a class="nav-link text-dark" href="../php/logout.php">LogOut</a>
          </div>
        </div>
      </div>
    </nav>
  </header><br><br><br>
  <!--/Order details-->
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1>Menu</h1>
        <div class="d-flex flex-column gap-3">

          <ul>
            <li>
              <img src="../assets/images/unli-pork-samgyup.jpg" class="product-img" alt="" />
              <div class="description">
                Unli-Pork Samgyup: ₱ 249.00 <br>
                <p>Includes choice of Pork Meat flavor, Braised Tofu, Kimchi, Potato Marble, Lettuce, Cucumber, Carrots, Samjang, Gochujang, Cheese Sauce</p>

            </li><br>
            <li>
              <img src="../assets/images/unli-beef-samgyup.jpg" class="product-img" alt="" />
              <div class="description">
                Unli-Beef Samgyup: ₱ 399.00 <br>
                <p>Includes choice of Beef Meat flavor, Braised Tofu, Kimchi, Potato Marble, Lettuce, Cucumber, Carrots, Samjang, Gochujang, Cheese Sauce</p>

            </li><br>
            <li>
              <img src="../assets/images/unli-pork-and-beef-samgyup.jpg" class="product-img" alt="" />
              <div class="description">
                Unli-Pork and Beef Samgyup: ₱ 449.00 <br>
                <p>Includes choice of Pork Meat and Beef Meat flavor, Braised Tofu, Kimchi, Potato Marble, Lettuce, Cucumber, Carrots, Samjang, Gochujang, Cheese Sauce</p>

            </li><br>
            <li>
              <img src="../assets/images/unli-shabu-shabu.jpg" class="product-img" alt="" />
              <div class="description">
                Unli Shabu-Shabu: ₱ 349.00 <br>
                <p>Includes choice of Meat Flavors, Vegetables, Noodles, Mushroom, Crabstick, Lubster Balls</p>

            </li><br>
            <li>
              <img src="../assets/images/koreyum-ultimate.jpg" class="product-img" alt="" />
              <div class="description">
                KoreYum Ultimate: ₱ 349.00 <br>
                <p>Includes choice of Pork and Beef Meat Flavor for Samgyupsal and Shabu Shabu Hotpot, Everything Unlimited</p>

            </li><br>

            <!-- Add more menu items here -->
          </ul>
        </div>
      </div>
      <div class="col-lg-4 "><br>

        <div class="sticky-form">
          <h2>Reservation Details</h2><br><br>
          <form action="../php/reserveInsert.php" method="post">

            <div class="mb-3">
              <label for="reservename" class="form-label"> Full Name: </label>
              <input name="reserveId" type="text" class="form-control" id="reservename" required>
            </div><br>

            <div class="mb-3">
              <label for="pax" class="form-label"> pax: </label>
              <input name="pax" type="text" class="form-control" id="pax" required>
            </div><br>

            <div class="mb-3">
              <label for="order">
                <h5>Select your Order here!</h5>
              </label>

              <select id="order" name="reserveOrder">
                <option value="">-- Please select --</option>
                <option value="Unli-Pork Samgyup: ₱ 249.00">Unli-Pork Samgyup: ₱ 249.00</option>
                <option value="Unli-Beef Samgyup: ₱ 399.00">Unli-Beef Samgyup: ₱ 399.00</option>
                <option value="Unli-Beef Samgyup: ₱ 399.00">Unli-Beef Samgyup: ₱ 399.00</option>
                <option value="Unli-Pork and Beef Samgyup: ₱ 449.00">Unli-Pork and Beef Samgyup: ₱ 449.00</option>
                <option value="KoreYum Ultimate: ₱ 349.00">KoreYum Ultimate: ₱ 349.00</option>
              </select>
            </div><br>

            <div class="mb-3">
              <label for="reservationDate">Date and Time:</label>
              <input type="datetime-local" id="reservationDate" name="dateTime" required><br><br>
            </div>

            <div>
              <input type="submit" name="submit" class="btn btn-light">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
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
  <title>Koreyum Delivery</title>
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
      top: 150px;
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
              <img src="../assets/images/unli-shabu-shabu.jpg" class="product-img" alt="" />
              <div class="description">
                KoreYum Set 1 (2 to 3 persons): ₱ 499.00 <br>
                <p>Includes choice of 2 meat variants (250grams each), Braised Tofu, Korean Kimchi, Lettuce, Cucumber, Garlic,
                  Ssamjang,Gochujang, Cheese Sauce and Potato Marbbles.</p>


            </li><br>
            <li>
              <img src="../assets/images/koreyum-ultimate.jpg" class="product-img" alt="" />
              <div class="description">
                KoreYum Set 2 (4 to 5 persons): ₱ 999.00 <br>
                <p>Includes choice of 2 meat variants (500grams each), Braised Tofu, Korean Kimchi, Lettuce, Cucumber, Garlic,
                  Ssamjang,Gochujang, Cheese Sauce and Potato Marbbles.</p>

            </li><br>
            <h1>Add-Ons</h1><br><br>
            <h2>Meats (per 250grams)</h2>
            <li>
              <img src="../assets/images/unli-pork-samgyup.jpg" class="product-img" alt="" />
              <div class="description">
                Pork (Plain): ₱ 120.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/unli-pork-samgyup.jpg" class="product-img" alt="" />
              <div class="description">
                Pork (Bulgogi): ₱ 120.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/unli-pork-samgyup.jpg" class="product-img" alt="" />
              <div class="description">
                Pork (Spicy): ₱ 120.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/unli-beef-samgyup.jpg" class="product-img" alt="" />
              <div class="description">
                Beef (Plain): ₱ 150.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/unli-beef-samgyup.jpg" class="product-img" alt="" />
              <div class="description">
                Beef (Bulgogi): ₱ 150.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/unli-beef-samgyup.jpg" class="product-img" alt="" />
              <div class="description">
                Beef (Spicy: ₱ 150.00) <br>

            </li><br>
            <h2>Sides</h2><br>
            <li>
              <img src="../assets/images/braised-tofu.jpg" class="product-img" alt="" />
              <div class="description">
                Korean Braised Tofu: ₱ 100.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/kimchi.webp" class="product-img" alt="" />
              <div class="description">
                Korean Kimchi: ₱ 100.00 <br>
            </li><br>
            <li>
              <img src="../assets/images/lettuce.jpg" class="product-img" alt="" />
              <div class="description">
                Lettuce: ₱ 100.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/cucumber.jpg" class="product-img" alt="" />
              <div class="description">
                Cucumber: ₱ 50.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/carrots.webp" class="product-img" alt="" />
              <div class="description">
                Carrots: ₱ 50.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/ssamjang.jpg" class="product-img" alt="" />
              <div class="description">
                Ssamjang (Sweet Sauce): ₱ 50.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/gochujang.jpg" class="product-img" alt="" />
              <div class="description">
                Gochujang (Spicy Sause): ₱ 50.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/carrots.webp" class="product-img" alt="" />
              <div class="description">
                Cheese Sauce: ₱ 50.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/potato-marble.png" class="product-img" alt="" />
              <div class="description">
                Potato Marble: ₱ 70.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/rice.jpg" class="product-img" alt="" />
              <div class="description">
                Rice: ₱ 20.00 <br>

            </li><br>
            <h2>Drinks</h2><br>
            <li>
              <img src="../assets/images/coke.webp" class="product-img" alt="" />
              <div class="description">
                Coca Cola: ₱ 40.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/juice.jpg" class="product-img" alt="" />
              <div class="description">
                Juice: ₱ 40.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/sprite.webp" class="product-img" alt="" />
              <div class="description">
                Sprite: ₱ 40.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/royal.webp" class="product-img" alt="" />
              <div class="description">
                Royal: ₱ 40.00 <br>

            </li><br>
            <li>
              <img src="../assets/images/soju.webp" class="product-img" alt="" />
              <div class="description">
                Soju: ₱ 120.00 <br>

            </li><br>


            <!-- Add more menu items here -->
          </ul>
        </div>
      </div>
      <div class="col-lg-4"><br>
        <div class="sticky-form">

          <h2>Delivery Details</h2>
          <form action="../php/deliveryInsert.php" method="post">

            <div class="mb-3">
              <label for="name" class="form-label"> Full Name: </label>
              <input name="Fullname" type="text" class="form-control" id="name" required>
            </div><br>

            <div class="mb-3">
              <label for="reservationDate">Date and Time:</label>
              <input type="datetime-local" id="reservationDate" name="Datetime" required><br><br>
            </div>

            <div class="mb-3">
              <label for="deliveradd" class="form-label">Delivery Address: </label>
              <input name="deliveryAddress" type="text" class="form-control" id="deliveryadd" required>
            </div><br>
            <div class="mb-3">
              <label for="deliver">
                <h5>Select your Order here!</h5>
              </label>

              <select id="deliver" name="orderDelivery">
                <option value="">-- Please select --</option>
                <option value="Koreyum set1">KoreYum Set 1 (2 to 3 persons): ₱ 499.00</option>
                <option value="KoreYum set2">KoreYum Set 2 (4 to 5 persons): ₱ 999.00</option>
              </select>
            </div><br>
            <div class="mb-3">
              <label for="deliverAdd">
                <h5>Select your Add Ons!</h5>
              </label>

              <select id="deliverAdd" name="adOns">
                <option value="">-- Please select --</option>
                <option value="Pork (Plain)">Pork (Plain): ₱ 120.00</option>
                <option value="Pork (Bulgogi)">Pork (Bulgogi): ₱ 120.00</option>
                <option value="Pork (Spicy)">Pork (Spicy): ₱ 120.00</option>
                <option value="Beef (Plain)">Beef (Plain): ₱ 150.00</option>
                <option value="Beef (Bulgogi)">Beef (Bulgogi): ₱ 150.00</option>
                <option value="Beef (Spicy)">Beef (Spicy: ₱ 150.00)</option>
              </select>
            </div><br>
            <div class="mb-3">
              <label for="deliverSide">
                <h5>Select your Sides here!</h5>
              </label>

              <select id="deliverSide" name="Sides">
                <option value="">-- Please select --</option>
                <option value="Korean Braised Tofu">Korean Braised Tofu: ₱ 100.00</option>
                <option value="Korean Kimchi">Korean Kimchi: ₱ 100.00</option>
                <option value="Lettuce">Lettuce: ₱ 100.00</option>
                <option value="Cucumber">Cucumber: ₱ 50.00</option>
                <option value="Carrots">Carrots: ₱ 50.00</option>
                <option value="Ssamjang (Sweet Sauce)">Ssamjang (Sweet Sauce): ₱ 50.00</option>
                <option value="Gochujang (Spicy Sause)">Gochujang (Spicy Sause): ₱ 50.00</option>
                <option value="Cheese Sauce">Cheese Sauce: ₱ 50.00</option>
                <option value="Potato Marble">Potato Marble: ₱ 70.00</option>
                <option value="Rice">Rice: ₱ 20.00</option>

              </select>
            </div><br>
            <div class="mb-3">
              <label for="deliverDrinks">
                <h5>Select your Drinks here!</h5>
              </label>

              <select id="deliverDrinks" name="Drinks">
                <option value="">-- Please select --</option>
                <option value="Coca Cola">Coca Cola: ₱ 40.00</option>
                <option value="Juice">Juice: ₱ 40.00</option>
                <option value="Sprite">Sprite: ₱ 40.00</option>
                <option value="Royal">Royal: ₱ 40.00</option>
                <option value="Soju">Soju: ₱ 120.00</option>
              </select>
            </div><br>
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
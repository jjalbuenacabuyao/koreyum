<header class="container">
  <nav class="navbar navbar-expand-lg bg-white nav">
    <div class="container-fluid p-0">
      <a class="navbar-brand" href="#">
        <img src="./assets/images/logo.png" width="128" height="auto" alt="KoreYum" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-grow-0" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark" href="#menu">Menu</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark" href="./pages/about.php">About</a>
          </li>

          <?php
          if (!isset($_SESSION['id'])) {
            echo '
            <li class="nav-item" style="padding-right: 0.5rem;">
              <a class="btn bg-red-600 text-white fw-bold rounded-pill px-3" style="--bs-btn-hover-bg: #991b1b;" href="./pages/login.php">
                Log in
              </a>
            </li>
            
            <li class="nav-item">
              <a class="btn btn-outline-dark rounded-pill px-3" href="./pages/register.php">
                Register
              </a>
            </li>
            ';
          } else {
            echo '
              <li class="nav-item">
                <a class="nav-link text-dark" href="./pages/orders.php">My Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="./pages/reservations.php">My Reservations</a>
              </li>
              ';

            if ($_SESSION['id'] === "1") {
              echo '
              <li class="nav-item" style="padding-right: 0.5rem;">
                <a class="nav-link text-dark" href="./pages/ViewInvoice.php">Daily Sales</a>
              </li>';
            }

            echo '
            <li class="nav-item">
              <a href="./php/logout.php" class="btn btn-danger fw-bold rounded-pill px-3">Log out</a>
            </li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/styles/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/styles/style.css" />
    <script src="./assets/js/bootstrap.min.js" defer></script>
    <title>KoreYum</title>
  </head>
  <body>
    <header class="fixed-top">
      <nav class="navbar navbar-expand-lg bg-body-tertiary nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img
              src="./assets/images/logo.png"
              width="128"
              height="auto"
              alt="KoreYum"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse flex-grow-0"
            id="navbarNavAltMarkup"
          >
            <div class="navbar-nav">
              <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
              <a class="nav-link text-dark" href="./pages/about.php">About Us</a>
            </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main class="min-vh-100 main">
      <div class="d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column row-gap-3 text-center button-group">

          <form action="php/login.php" method="post">
            <div>
            <label for="cusId" class="form-label">Enter Customer Id</label>
              <input name="customerId" type="text" class="form-control" id="cusId">

            <label for="password" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="password"><br>
            </div>
            <div>
              <input type="submit" name="submit" class="btn btn-light">
            </div>

      
          </form>
          <button
            class="btn btn-light"
            data-bs-target="#register"
            data-bs-toggle="modal"
          >
            Register
          </button>
        </div>
      </div>

      <div class="features container-fluid">
        <div class="row justify-content-center">
          <div class="col text-center">
            <img class="rounded" src="./assets/images/samgyeopsal.png" alt="" />
            <h1 class="text-white fs-4">Unlimited Samgyeopsal</h1>
          </div>

          <div class="col text-center">
            <img class="rounded" src="./assets/images/soju.png" alt="" />
            <h1 class="text-white fs-4">Korean Soju</h1>
          </div>

          <div class="col text-center">
            <img class="rounded" src="./assets/images/milktea.png" alt="" />
            <h1 class="text-white fs-4">Unlimited Milktea</h1>
          </div>
        </div>
      </div>
    </main>

    <div class="modal" tabindex="-1" id="sign-in">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Signin</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>

            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal" tabindex="-1" id="register">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Register</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="php/userInsert.php" method="post">

              <div class="mb-3">
                <label for="cusId" class="form-label">CustomerId</label>
                <input
                  name="customerId"
                  type="text"
                  class="form-control"
                  id="cusId"
                  aria-describedby="emailHelp"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input
                  name="password"
                  type="password"
                  class="form-control"
                  id="password"
                  aria-describedby="emailHelp"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input
                  name="fullName"
                  type="text"
                  class="form-control"
                  id="fullName"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input
                  name="address"
                  type="text"
                  class="form-control"
                  id="address"
                  aria-describedby="emailHelp"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="contactNo" class="form-label">Contact number</label>
                <input
                  name="contactNo"
                  type="text"
                  class="form-control"
                  id="contactNo"
                  aria-describedby="emailHelp"
                  required
                />
              </div>              
              <div class="mb-3">
                <label for="Email" class="form-label">Email Address</label>
                <input
                  name="Email"
                  type="text"
                  class="form-control"
                  id="Email"
                  aria-describedby="emailHelp"
                />
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

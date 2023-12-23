<?php
include "../php/getUrlParams.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/styles/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/styles/utility.css">
  <script src="../assets/js/bootstrap.min.js" defer></script>
  <title>Registration | KoreYum</title>
</head>

<body>
  <main class="container font-primary mb-5" style="max-width: 600px;margin-top:4rem;">
    <div class="d-flex justify-content-center mb-2">
      <img src="../assets/images/logo.png" class="w-25" alt="">
    </div>
    <h1 class="mb-3 text-center font-secondary fw-bold">Register</h1>
    <form action="../php/register.php" method="post">
      <div class="mb-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input name="fullname" type="text" class="form-control p-3" id="fullname" aria-describedby="emailHelp" required />
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input name="address" type="text" class="form-control p-3" id="address" aria-describedby="emailHelp" required />
      </div>
      <div class="mb-3">
        <label for="contact-number" class="form-label">Contact number</label>
        <input name="contact-number" type="text" class="form-control p-3" id="contact-number" aria-describedby="emailHelp" required />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input name="email" type="email" class="form-control p-3" id="email" aria-describedby="emailHelp" required />
        <?php
        if (isset($params["error"]) && $params["error"] === "email already exist") {
          echo '<p class="text-danger">Email already exist</p>';
        } ?>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control p-3" id="password" aria-describedby="emailHelp" required />
      </div>
      <div class="d-flex justify-content-end">
        <input type="submit" name="submit" class="btn bg-red-600 text-white rounded-full px-3" style="--bs-btn-hover-bg: #991b1b;" />
      </div>
    </form>
  </main>
</body>

</html>
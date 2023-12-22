<?php
$url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$url_components = parse_url($url);
if (isset($url_components['query'])) {
  parse_str($url_components['query'], $params);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../assets/styles/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/styles/utility.css">
  <script src="../assets/js/bootstrap.min.js" defer></script>
  <title>Login | KoreYum</title>
  <style>
    #login-btn:hover {
      opacity: 90%!important;
    }
  </style>
</head>

<body>
  <div class="container font-primary" style="max-width: 600px;margin-top:4rem;">
    <div class="d-flex justify-content-center">
      <img src="../assets/images/logo.png" class="w-25" alt="">
    </div>

    <h1 class="mb-3 text-center font-secondary fw-bold">Log in your account</h1>
    <form action="../php/login.php" method="post">
      <div>
        <label for="email" class="form-label"></label>
        <input name="email" type="email" class="form-control p-3" id="email" placeholder="Email">
        <?php
        if (isset($params["error"]) && $params["error"] === "User does not exist") {
          echo '<p class="text-danger">User does not exist</p>';
        } ?>
      </div>
      <div class="input-box position-relative">
        <label for="password" class="form-label"></label>
        <input name="password" type="password" class="form-control p-3" id="password" placeholder="Password">
        <?php
        if (isset($params["error"]) && $params["error"] === "Incorect password") {
          echo '<p class="text-danger">Incorect password</p>';
        } ?>
        <i id="eye-icon" class="bi bi-eye-slash" style="font-size: 1.75rem; position:absolute; top:2.2rem; right:1.5rem;"></i>
      </div>

      <div class="d-flex justify-content-end mt-4">
        <button id="submit-btn" class="btn bg-red-600 text-white rounded-full px-3" style="--bs-btn-hover-bg: #991b1b;" type="submit">Log in</button>
      </div>
    </form>
  </div>
</body>

<script>
  let eyeIcon = document.getElementById("eye-icon");
  let password = document.getElementById("password");

  eyeIcon.addEventListener("click", () => {
    if (password.type === "password") {
      password.type = "text";
      eyeIcon.classList.replace("bi-eye-slash", "bi-eye-fill")
    } else {
      password.type = "password";
      eyeIcon.classList.replace("bi-eye-fill", "bi-eye-slash")
    }
  })
</script>

</html>
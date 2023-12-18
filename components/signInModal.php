<?php
$url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$url_components = parse_url($url);
if (isset($url_components['query'])) {
  parse_str($url_components['query'], $params);
}
?>

<div class="modal" tabindex="-1" id="sign-in">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Signin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="php/login.php" method="post">
          <div>
            <label for="email" class="form-label"></label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
            <?php
            if (isset($params["error"]) && $params["error"] === "User does not exist") {
              echo '<p class="text-danger">User does not exist</p>';
            } ?>
          </div>
          <div class="input-box">
            <label for="password" class="form-label"></label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
            <?php
            if (isset($params["error"]) && $params["error"] === "Incorect password") {
              echo '<p class="text-danger">Incorect password</p>';
            } ?>
            <img src="  ./assets/images/eycon.png" id="eye" width="30" height="auto">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
  let eye = document.getElementById("eye");
  let password = document.getElementById("password");

  eye.onclick = function() {
    if (password.type === "password") {
      password.type = "text";
      eye.src = "./assets/images/eycon.png"
    } else {
      password.type = "password";
      eye.src = "./assets/images/eyeIcon.png";
    }
  }
</script>
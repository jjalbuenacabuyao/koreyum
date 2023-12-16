<?php
echo '<div class="modal" tabindex="-1" id="sign-in">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Signin</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="php/login.php" method="post">
        <div>
          <label for="cusId" class="form-label"></label>
          <input name="customerId" type="text" class="form-control" id="cusId" placeholder="Username">
        </div>
        <div class="input-box">
          <label for="password" class="form-label"></label>
          <input name="password" type="password" class="form-control" id="password" placeholder="Password">
          <img src="  ./assets/images/eycon.png" id="eye" width="30" height="auto">
          <script>
            let eye = document.getElementById("eye");
            let password = document.getElementById("password");

            eye.onclick = function() {
              if (password.type == "password") {
                password.type = "text";
                eye.src = "./assets/images/eycon.png"
              } else {
                password.type = "password";
                eye.src = "./assets/images/eyeIcon.png";
              }
            }
          </script>
        </div><br>
        <div>
          <input type="submit" name="submit" class="btn btn-primary">
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>'
?>
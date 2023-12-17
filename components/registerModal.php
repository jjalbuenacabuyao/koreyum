<?php
echo '<div class="modal" tabindex="-1" id="register">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Register</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="php/register.php" method="post">
      <div class="mb-3">
          <label for="fullname" class="form-label">Full Name</label>
          <input name="fullname" type="text" class="form-control" id="fullname" aria-describedby="emailHelp" required />
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <input name="address" type="text" class="form-control" id="address" aria-describedby="emailHelp" required />
        </div>
        <div class="mb-3">
          <label for="contact-number" class="form-label">Contact number</label>
          <input name="contact-number" type="text" class="form-control" id="contact-number" aria-describedby="emailHelp" required />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="password" aria-describedby="emailHelp" required />
        </div>
        <div>
          <input type="submit" name="submit" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>
</div>';

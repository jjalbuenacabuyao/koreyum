<?php
echo '<div class="modal" tabindex="-1" id="register">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Register</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="php/userInsert.php" method="post">

        <div class="mb-3">
          <label for="cusId" class="form-label">Username</label>
          <input name="customerId" type="text" class="form-control" id="cusId" aria-describedby="emailHelp" required />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="password" aria-describedby="emailHelp" required />
        </div>
        <div class="mb-3">
          <label for="fullName" class="form-label">Full Name</label>
          <input name="fullName" type="text" class="form-control" id="fullName" aria-describedby="emailHelp" required />
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <input name="address" type="text" class="form-control" id="address" aria-describedby="emailHelp" required />
        </div>
        <div class="mb-3">
          <label for="contactNo" class="form-label">Contact number</label>
          <input name="contactNo" type="text" class="form-control" id="contactNo" aria-describedby="emailHelp" required />
        </div>
        <div class="mb-3">
          <label for="Email" class="form-label">Email Address</label>
          <input name="Email" type="Email" class="form-control" id="Email" aria-describedby="emailHelp" required />
        </div>
        <div>
          <input type="submit" name="submit" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>
</div>'
?>
<?php
function renderCard($withButton, $imageSrc, $title, $price)
{
  if ($withButton) {
    echo '<div class="card shadow">
    <img src=' . $imageSrc . ' class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title font-secondary text-red-600 fw-bold">' . $title . '</h4>
      <p class="card-text">Includes choice of 2 meat variants (500grams each), Braised Tofu, Korean Kimchi, Lettuce, Cucumber, Garlic, Ssamjang,Gochujang, Cheese Sauce and Potato Marbbles.</p>
      <p class="fw-bold">₱' . $price . '.00</p>
      <a href="#" class="btn btn-primary">Order</a>
    </div>
  </div>';
    return;
  }

  echo '<div class="card shadow">
  <img src=' . $imageSrc . ' class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title font-secondary text-red-600 fw-bold">' . $title . '</h4>
    <p class="fw-bold">₱' . $price . '.00</p>
  </div>
</div>';
}

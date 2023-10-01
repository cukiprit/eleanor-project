<!-- Navbar -->
<header style="background-color: #EE9322;" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
  <div class="col-md-3 mb-2 mb-md-0">
    <a href="<?= base_url("/") ?>" class="d-inline-flex fw-bold text-white link-body-emphasis text-decoration-none">
      <img class="ms-sm-0 ms-md-3" src="<?= base_url('img/logo/logo-light.png') ?>" alt="Logo" width="150">
    </a>
  </div>

  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li>
      <a href="<?= base_url("/") ?>" class="nav-link text-white px-2">Home</a>
    </li>

    <li>
      <a href="<?= base_url("/store") ?>" class="nav-link text-white px-2">Store</a>
    </li>

    <li>
      <a href="<?= base_url("/contact") ?>" class="nav-link text-white px-2">Contact</a>
    </li>
  </ul>

  <div class="col-md-3 text-end">
    <a href="<?= base_url("/login") ?>" class="btn btn-outline-light me-sm-0 me-md-3">Login</a>
  </div>
</header>
<!-- End of Navbar -->
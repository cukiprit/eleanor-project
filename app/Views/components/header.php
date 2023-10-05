<!-- Navbar -->
<header class="w-100 row justify-content-md-between align-items-center py-3 px-5">
  <div class="col-sm-2">
    <a href="<?= base_url("/") ?>" class="w-auto d-inline-flex fw-bold text-white link-body-emphasis text-decoration-none">
      <img class="ms-sm-0" src="<?= base_url('img/logo/logo-eleanor (1).png') ?>" alt="Logo" width="120px" >
    </a>
  </div>

  <ul class="nav col mb-2 justify-content-center mb-md-0">
    <li>
      <a href="<?= base_url("/") ?>" class="nav-link text-dark px-4 mx-1 fs-6">Beranda</a>
    </li>

    <li>
      <a href="<?= base_url("/store") ?>" class="nav-link text-dark px-4 mx-1 fs-6">Produk</a>
    </li>

    <li>
      <a href="<?= base_url("/contact") ?>" class="nav-link text-dark px-4 mx-1 fs-6">Hubungi</a>
    </li>
  </ul>

  <div class="col-lg-2 text-end">
    <a href="<?= base_url("/login") ?>" style="background-color: #EE9322;" class="btn text-white px-4">Login</a>
  </div>
</header>
<!-- End of Navbar -->
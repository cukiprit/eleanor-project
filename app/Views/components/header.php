<header class="position-fixed w-100 row g-0 justify-content-md-between align-items-center px-5 py-3 z-3"
  style="z-index: 3;">
  <div class="col-sm-2">
    <a href="<?= base_url("/") ?>"
      class="w-auto d-inline-flex fw-bold text-white link-body-emphasis text-decoration-none">
      <img class="ms-sm-0" src="<?= base_url('img/logo/logo-eleanor (1).png') ?>" alt="Logo" width="90px">
    </a>
  </div>
  <ul class="nav col mb-2 justify-content-start mb-md-0">
    <li>
      <a href="<?= base_url("/") ?>" class="nav-link text-dark px-4 mx-1 fs-17 hovering-navbar">Beranda</a>
    </li>
    <li>
      <a href="<?= base_url("/store") ?>" class="nav-link text-dark px-4 mx-1 fs-17 hovering-navbar">Produk</a>
    </li>
    <li>
      <a href="<?= base_url("/contact") ?>" class="nav-link text-dark px-4 mx-1 fs-17 hovering-navbar">Hubungi</a>
    </li>
  </ul>
  <div class="col-lg-2 text-end">
    <a href="<?= base_url("/login") ?>" style="background-color: #EE9322;"
      class="btn text-white px-4 me-md-2 bg-dark-amber fs-16">Login</a>
  </div>
</header>
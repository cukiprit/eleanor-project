<nav class="navbar navbar-expand-lg position-fixed top-0 w-100 px-4 px-md-5 py-md-3" id="navigation-bar"
  style="z-index: 3;">
  <div class="container-fluid px-0">
    <a class="navbar-brand" href="<?= base_url("/") ?>">
      <img class="ms-sm-0" src="<?= base_url('img/logo/logo-eleanor (1).png') ?>" alt="Logo" width="90px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-lg-5 py-3 py-lg-0">
        <li class="nav-item">
          <a href="<?= base_url("/") ?>"
            class="nav-link active text-dark px-lg-4 mx-1 fs-17 hovering-navbar">Beranda</a>
        </li>
        <li class="nav-item my-2 my-lg-0">
          <a href="<?= base_url("/store") ?>" class="nav-link text-dark px-lg-4 mx-1 fs-17 hovering-navbar">Produk</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url("/contact") ?>"
            class="nav-link text-dark px-lg-4 mx-1 fs-17 hovering-navbar">Hubungi</a>
        </li>
      </ul>
      <div class="d-flex mb-2 mb-md-0">
        <a href="<?= base_url("/login") ?>" style="background-color: #EE9322;"
          class="btn text-white px-lg-4 bg-dark-amber fs-16">Login</a>
      </div>
    </div>
  </div>
</nav>
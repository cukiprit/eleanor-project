<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
      <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="<?= base_url("/admin") ?>" class="d-none d-md-flex justify-content-md-center align-items-md-center pb-3 my-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <img class="img-fluid" src="<?= base_url('/img/logo/logo-light.png') ?>" alt="Logo">
        </a>

        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
          <li class="nav-item mt-3 mb-2">
            <a href="<?= base_url("/admin") ?>" class="nav-link align-middle px-0 text-white">
              <i class="fa-solid fa-gauge"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
            </a>
          </li>

          <li class="nav-item mb-2">
            <a href="<?= base_url("/admin/tambah_barang") ?>" class="nav-link align-middle px-0 text-white">
              <i class="fa-solid fa-boxes-stacked"></i> <span class="ms-1 d-none d-sm-inline">Barang</span>
            </a>
          </li>

          <li class="nav-item mb-2">
            <a href="<?= base_url("/admin/barang_masuk") ?>" class="nav-link align-middle px-0 text-white">
              <i class="fa-solid fa-box-open"></i> <span class="ms-1 d-none d-sm-inline">Barang Masuk</span>
            </a>
          </li>

          <li class="nav-item mb-2">
            <a href="<?= base_url("/admin/barang_keluar") ?>" class="nav-link align-middle px-0 text-white">
              <i class="fa-solid fa-box-archive"></i> <span class="ms-1 d-none d-sm-inline">Barang Keluar</span>
            </a>
          </li>

          <li class="nav-item mb-2">
            <a href="<?= base_url("/logout") ?>" class="nav-link align-middle px-0 text-white">
              <i class="fa-solid fa-arrow-right-from-bracket"></i> <span class="ms-1 d-none d-sm-inline">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col py-3">
      <?= $this->renderSection('content') ?>
    </div>
  </div>
</div>
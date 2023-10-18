<div class="d-flex flex-column justify-content-between p-2 p-lg-4 min-vh-100 bg-dark sidebar">
  <div class="text-lg-start">
    <div class="nav-link d-flex border-bottom pt-3 pt-lg-0 pb-3 pb-lg-4">
      <span class="w-50 d-lg-none">
        <button type="button" class="btn mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars fs-3 text-white"></i>
        </button>
      </span>
      <span class="">
        <a href="<?= base_url("/admin") ?>" class="w-100 text-decoration-none d-lg-block ms-2 collapse" id="navbarSupportedContent">
          <img class="img-fluid logo-brand" src="<?= base_url('/img/logo/logo-light.png') ?>" alt="Logo">
        </a>
      </span>
    </div>

    <ul class="nav nav-pills flex-column mt-4 align-items-center align-items-lg-start w-100">
      <li class="nav-item w-100">
        <a href="<?= base_url("/admin") ?>" class="nav-link align-middle text-white px-lg-0 py-3">
          <span class="d-inline-block text-center menu-logo">
            <i class="fa-solid fa-gauge fs-5"></i>
          </span>
          <span class="d-lg-inline collapse ms-2" id="navbarSupportedContent">Statistik</span>
        </a>
      </li>
      <li class="nav-item w-100">
        <a href="<?= base_url("/admin/tambah_barang") ?>" class="nav-link align-middle text-white px-lg-0 py-3">
          <span class="d-inline-block text-center menu-logo">
            <i class="fa-solid fa-boxes-stacked fs-5"></i>
          </span>
          <span class="d-lg-inline collapse ms-2" id="navbarSupportedContent">Manajemen Barang</span>
        </a>
      </li>
      <li class="nav-item w-100">
        <a href="<?= base_url("/admin/barang_masuk") ?>" class="nav-link align-middle text-white px-lg-0 py-3">
          <span class="d-inline-block text-center menu-logo">
            <i class="fa-solid fa-box-open fs-5"></i>
          </span>
          <span class="d-lg-inline collapse ms-2" id="navbarSupportedContent">Barang Masuk</span>
        </a>
      </li>
      <li class="nav-item w-100">
        <a href="<?= base_url("/admin/barang_keluar") ?>" class="nav-link align-middle text-white px-lg-0 py-3">
          <span class="d-inline-block text-center menu-logo">
            <i class="fa-solid fa-box-archive fs-5"></i>
          </span>
          <span class="d-lg-inline collapse ms-2" id="navbarSupportedContent">Barang Keluar</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="w-100">
    <button class="nav-item w-100 btn p-0 bg-danger text-start">
      <a href="<?= base_url("/logout") ?>" class="nav-link align-middle text-white px-lg-3 py-2">
        <span class="d-inline-block text-center text-lg-start menu-logo">
          <i class="fa-solid fa-arrow-right-from-bracket fs-5"></i>
        </span>
        <span class="d-lg-inline collapse ms-2" id="navbarSupportedContent">Keluar Akun</span>
      </a>
    </button>
  </div>
</div>
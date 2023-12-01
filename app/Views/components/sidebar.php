<div class="w-100 d-flex">
  <div class="d-flex flex-column justify-content-between p-2 p-md-4 min-vh-100 bg-dark sidebar">
    <div class="text-center text-md-start">
      <div class="border-bottom pt-3 pt-md-0 pb-3 pb-md-4">
        <button type="button" class="btn d-md-none">
          <i class="fas fa-bars fs-3 text-white"></i>
        </button>
        <a href="<?= base_url("/admin") ?>" class="w-50 d-none d-md-block text-decoration-none">
          <img class="img-fluid" src="<?= base_url('/img/logo/logo-light.png') ?>" alt="Logo">
        </a>
      </div>

      <ul class="nav nav-pills flex-column mt-4 align-items-center align-items-sm-start w-100" id="menu">

        <?php if (session()->get('role') == 'Super-Admin') : ?>
          <li class="nav-item w-100">
            <a href="<?= base_url("/admin/user") ?>" class="nav-link align-middle text-white px-0 py-3">
              <span class="d-inline-block" style="width: 2rem;">
                <i class="fa-solid fa-users fs-5"></i>
              </span>
              <span class="d-none d-md-inline">Dashboard User</span>
            </a>
          </li>
        <?php endif ?>

        <li class="nav-item w-100">
          <a href="<?= base_url("/admin") ?>" class="nav-link align-middle text-white px-0 py-3">
            <span class="d-inline-block" style="width: 2rem;">
              <i class="fa-solid fa-gauge fs-5"></i>
            </span>
            <span class="d-none d-md-inline">Statistik</span>
          </a>
        </li>

        <li class="nav-item w-100">
          <a href="<?= base_url("/admin/tambah_barang") ?>" class="nav-link align-middle text-white px-0 py-3">
            <span class="d-inline-block" style="width: 2rem;">
              <i class="fa-solid fa-boxes-stacked fs-5"></i>
            </span>
            <span class="d-none d-md-inline">Manajemen data</span>
          </a>
        </li>

        <?php if (session()->get('role') == 'Admin-1' || session()->get('role') == 'Super-Admin') : ?>
          <li class="nav-item w-100">
            <a href="<?= base_url("/admin/barang_masuk") ?>" class="nav-link align-middle text-white px-0 py-3">
              <span class="d-inline-block" style="width: 2rem;">
                <i class="fa-solid fa-box-open fs-5"></i>
              </span>
              <span class="d-none d-md-inline">Barang Masuk</span>
            </a>
          </li>
        <?php endif ?>

        <?php if (session()->get('role') == 'Admin-1' || session()->get('role') == 'Super-Admin') : ?>
          <li class="nav-item w-100">
            <a href="<?= base_url("/admin/barang_keluar") ?>" class="nav-link align-middle text-white px-0 py-3">
              <span class="d-inline-block" style="width: 2rem;">
                <i class="fa-solid fa-box-archive fs-5"></i>
              </span>
              <span class="d-none d-md-inline">Barang Keluar</span>
            </a>
          </li>
        <?php endif ?>
      </ul>
    </div>

    <div class="w-100">
      <button class="nav-item w-100 btn p-0 bg-danger text-start">
        <a href="<?= base_url("/logout") ?>" class="nav-link align-middle text-white px-3 py-2">
          <span class="d-inline-block text-center text-md-start" style="width: 2rem;">
            <i class="fa-solid fa-arrow-right-from-bracket fs-5"></i>
          </span>
          <span class="d-none d-md-inline">Keluar Akun</span>
        </a>
      </button>
    </div>
  </div>
  <div class="w-100 px-5 py-4">
    <?= $this->renderSection('content') ?>
  </div>
</div>
<div style="background-color: #EE9322;" class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark vh-100" style="width: 300px;">
  <a href="<?= base_url('/admin') ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <img src="<?= base_url('img/logo/logo-light.png') ?>" alt="Logo" width="150">
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="<?= base_url('/admin') ?>" class="nav-link text-white">
        <i class="fa-solid fa-gauge"></i>
        Dashboard
      </a>
    </li>

    <li class="nav-item">
      <a href="<?= base_url('/admin/tambah_barang') ?>" class="nav-link text-white">
        <i class="fa-solid fa-cart-flatbed"></i>
        Tambah Barang
      </a>
    </li>

    <li class="nav-item">
      <a href="<?= base_url('/admin/barang_masuk') ?>" class="nav-link text-white">
        <i class="fa-solid fa-door-open"></i>
        Barang Masuk
      </a>
    </li>

    <li class="nav-item">
      <a href="<?= base_url('/admin/barang_keluar') ?>" class="nav-link text-white">
        <i class="fa-solid fa-door-closed"></i>
        Barang Keluar
      </a>
    </li>
  </ul>
</div>
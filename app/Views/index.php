<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="homepage-style w-100 position-relative row align-items-center justify-content-between mx-auto z-0">
  <div class="bg-image position-absolute"></div>
  <div class="col col-lg-6 headline mx-auto px-4 px-md-5 py-5 py-md-0 text-center text-lg-start">
    <span class="emphasis lh-1">
      <h1 class="display-5 fw-bold" style="color: #d97706;">Cek Ketersediaan</h1>
      <h1 class="display-5 fw-bold">Barang di Gudang Kami</h1>
    </span>
    <p class="my-4 fs-17">
      Kami hadir untuk menjadi mitra sebagai solusi pertumbuhan bisnis anda. Kami adalah sebuah perusahaan di bidang
      digital marketing yang berfokus pada layanan di marketplace untuk dropship dan freelance, serta menyediakan jasa
      gudang untuk transit produk dan resi.
    </p>
    <div class="p-0">
      <a href="/store" class="btn text-white px-5 py-2 mt-2 me-md-2 bg-dark-amber text-uppercase fs-16">Lihat
        Stok Barang</a>
    </div>
  </div>

  <div class="col-lg-5 p-0 d-none d-lg-block">
    <div class="position-relative">
      <img src="<?= base_url("img/eduardo-soares-y39ElnSaZxc-unsplash.jpg") ?>" class="d-block w-100"
        style="object-fit: cover; height:100vh; object-position: 35%; filter: brightness(0.5);" alt="...">
      <div class="position-absolute bottom-0 text-white m-5 border-bottom border-2">
        <h1 class="fs-2 fw-bold">Nike Shoes</h1>
        <p class="fs-22">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
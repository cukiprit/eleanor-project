<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<!-- Heroes -->
<div class="w-100 row align-items-center justify-content-around px-5">

  <div class="col-lg-6">
    <h1 class="display-5 fw-bold text-body emphasis fs-1 lh-1 mb-4">
      Belanja Sepuasnya Dengan Harga Terjangkau
    </h1>
    <p class="mt-2 mb-5 fs-5 fw-normal">
      Kami hadir untuk menjadi mitra sebagai solusi pertumbuhan bisnis anda. Kami adalah sebuah perusahaan di bidang digital marketing yang berfokus pada layanan di marketplace untuk dropship dan freelance, serta menyediakan jasa gudang untuk transit produk dan resi.
    </p>

    <div class="d-grid gap-2 d-lg-flex justify-content md-start">
      <a href="/store" style="background-color: #EE9322;" class="btn text-white px-4 me-md-2">Lihat Stok Barang</a>
    </div>
  </div>

  <div class="col-lg-5 d-lg-block d-sm-none">
    <img class="d-block w-100 mx-lg-auto img-fluid" src="<?= base_url("Buy.svg") ?>" alt="Heroes image" loading="lazy">
  </div>

</div>
<!-- End of Heroes -->

<?= $this->endSection() ?>
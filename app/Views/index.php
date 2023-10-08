<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<!-- Heroes -->
  <div class="w-100 row align-items-center justify-content-around" style="min-height: 85vh">
    
    <div class="col-lg-6">
      <h1 class="display-4 fw-bold text-body emphasis lh-1">
        <span class="" style="color: #EE9322;">Cek Ketersediaan</span> Barang di Gudang Kami
      </h1>

      <p class="mt-2 mt-3 fw-normal desc">
      Kami hadir untuk menjadi mitra sebagai solusi pertumbuhan bisnis anda. Kami adalah sebuah perusahaan di bidang digital marketing yang berfokus pada layanan di marketplace untuk dropship dan freelance, serta menyediakan jasa gudang untuk transit produk dan resi.
      </p>
      <div class="p-0">
        <a href="/store" style="background-color: #EE9322;" class="btn rounded-pill text-white px-4 mt-2 me-md-2">Lihat Stok Barang</a>
      </div> 
    </div>

    <div class="col-lg-5 overflow-hidden p-0">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="position-relative carousel-item active">
            <img src="<?= base_url("img/domino-164_6wVEHfI-unsplash.jpg") ?>" class="d-block w-100 rounded" style="object-fit: cover; height:400px; " alt="...">
            <div class="position-absolute bottom-0 text-white px-5 py-2">
              <h1 class="fs-4">Nike Shoes</h1>
              <p>Sepatu kesukaan anak muda saat ini</p>
            </div>  
          </div>
          <div class="position-relative carousel-item ">
            <img src="<?= base_url("img/cristofer-maximilian-AqLIkOzWDAk-unsplash.jpg") ?>" class="d-block w-100 rounded" style="object-fit: cover; height:400px; " alt="...">
            <div class="position-absolute bottom-0 px-5 py-2">
              <h1 class="fs-4">Hand Cleansing Gel</h1>
              <p class="">Gel pembersih tangan</p>
            </div>  
          </div>
          <div class="position-relative carousel-item ">
            <img src="<?= base_url("img/annie-williams-FlP6C5pkMKs-unsplash.jpg") ?>" class="d-block w-100 rounded" style="object-fit: cover; height:400px; " alt="...">
            <div class="position-absolute bottom-0 px-5 py-2">
              <h1 class="fs-4">Hand Cleansing Gel</h1>
              <p class="">Gel pembersih tangan</p>
            </div>  
          </div>
        </div>
      </div>      
    </div>
    
  </div>
  <!-- End of Heroes -->
  
  <?= $this->endSection() ?>

<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="px-4 px-md-5 py-6">
  <div class="mb-lg-3">
    <a href="/store" class="d-flex align-items-center btn ps-2 pe-3 mt-2">
      <i class="fas fa-chevron-left me-2"></i>
      Kembali
    </a>
  </div>

  <div class="row flex-column flex-lg-row py-2 mx-0" style="min-height: 75vh;">
    <div class="col col-lg-6 p-0 mb-3 m-auto text-center" style="height: 450px;">
      <img src="<?= base_url('uploads/img/' . $product['product_picture']) ?>" alt="<?= $product['product_name'] ?>" class="h-100 rounded">
    </div>
    <div class="col p-sm-0 p-lg-4">
      <h1 class="card-title text-capitalize"><?= $product['product_name'] ?></h1>
      <p class="fs-17 my-4">
        <?= $product['product_description'] ?>
      </p>

      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item border-top bg-transparent">
          <h2 class="accordion-header bg-transparent">
            <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <p class="fs-17 m-0">Harga Barang</p>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p class="card-text my-2 text-danger fs-17">Rp <?= $product['product_price'] ?></p>
            </div>
          </div>
        </div>

        <div class="accordion-item border-bottom bg-transparent">
          <h2 class="accordion-header bg-transparent">
            <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
              <p class="fs-17 m-0">Total Stok Barang</p>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p class="card-text my-2 fs-17"><?= $product['product_stock'] ?> Barang</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection() ?>
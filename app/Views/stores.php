<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="min-vh-100 m-0 my-5 pt-5 px-4 px-md-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold">Daftar Barang Tersedia</h2>
    <p class="fs-17">List barang yang tersedia di gudang dan dapat dicek ketersediaan barang sesuai filter barang</p>
  </div>

  <div class="my-5">
    <div>
      <div class="row justify-content-center">
        <?php foreach ($products as $product) : ?>
        <div class="col-auto col-md-4 col-lg-3 p-0 p-md-1">
          <a href="<?= base_url("/store/" . $product['product_code']) ?>"
            class="text-decoration-none card-style h-100 d-flex flex-column">
            <div class="w-100 p-1" style="height: 350px;">
              <img src="<?= base_url('uploads/img/') . $product['product_picture'] ?>"
                alt="<?= $product['product_name'] ?>" class="w-100 h-100 radius-10">
            </div>
            <div class="card-body p-2 radius-15 d-flex flex-column justify-content-between">
              <p class="card-title text-capitalize m-0 fs-17">
                <?= $product['product_name'] ?>
              </p>
              <p class="card-text my-1 text-danger fs-17">Rp
                <?= $product['product_price'] ?></p>
            </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="d-flex justify-content-center my-4">
      <?= $pager->links('products', 'bootstrap_pagination') ?>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
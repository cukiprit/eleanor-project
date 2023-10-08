<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="m-0 px-5">
  <div class="w-100 row justify-content-center">
    <span class="d-flex justify-content-between align-items-center my-4">
      <h2 class="">Daftar Barang Peternakan</h2>
      <p class="m-0">Total 1000 Barang</p>
    </span>
    <?php foreach ($products as $product) : ?>
        <a href="<?= base_url("/store/" . $product['product_code']) ?>" class="col-lg-4 col-md-5 mb-4 text-dark text-decoration-none">
          <div class="card h-100">
            <img src="<?= $product['product_picture'] ?>" alt="<?= $product['product_name'] ?>" class="img-fluid">
            <div class="card-body">
              <h5 class="card-title text-capitalize"><?= $product['product_name'] ?></h5>
              <p class="card-text text-primary">Rp <?= $product['product_price'] ?></p>
            </div>
          </div>
        </a>
    <?php endforeach; ?>
  </div>
  <div class="d-flex justify-content-center">
    <?= $pager->links('products', 'bootstrap_pagination') ?>
  </div>
</div>

<?= $this->endSection() ?>
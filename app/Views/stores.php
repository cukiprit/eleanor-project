<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="m-0 ">
  <div class="w-100">
    <span class="d-flex justify-content-between align-items-center my-4">
      <h2 class="">Daftar Barang Peternakan</h2>
      <p class="m-0">Total 1000 Barang</p>
    </span>
    <div class="d-flex flex-wrap justify-content-center">
      <?php foreach ($products as $product) : ?>
      <div class="h-100 p-0 my-3 card-style">
        <a href="<?= base_url("/store/" . $product['product_code']) ?>" class="text-decoration-none card-style">
          <div class="w-100 p-2" style="height: 300px;">
            <img src="<?= $product['product_picture'] ?>" alt="<?= $product['product_name'] ?>"
              class="w-100 h-100 radius-15">
          </div>
          <div class="card-body p-3 radius-15">
            <h5 class="card-title text-capitalize fw-bold m-0">
              <?= $product['product_name'] ?>
            </h5>
            <p class="text-truncate m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, exercitationem!
            </p>
            <p class="card-text my-2 text-danger" style="font-weight: 500; font-size: 18px;">Rp
              <?= $product['product_price'] ?></p>
            <span>
              Total Stok
              <b><?= $product['product_stock'] ?></b>
              barang
            </span>
          </div>
        </a>
      </div>

      <?php endforeach; ?>
    </div>
  </div>
  <div class="d-flex justify-content-center">
    <?= $pager->links('products', 'bootstrap_pagination') ?>
  </div>
</div>

<?= $this->endSection() ?>




<!-- <a href="<?= base_url("/store/" . $product['product_code']) ?>" class="col-lg-4 col-md-5 mb-4 text-dark text-decoration-none">
  <div class="card h-100">
    <img src="<?= $product['product_picture'] ?>" alt="<?= $product['product_name'] ?>" class="img-fluid">
    <div class="card-body">
      <h5 class="card-title text-capitalize"><?= $product['product_name'] ?></h5>
      <p class="card-text text-primary">Rp <?= $product['product_price'] ?></p>
    </div>
  </div>
</a> -->
<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <?php foreach ($products as $product) : ?>
      <div class="col-lg-3 col-md-6 col-sm-12 my-3">
        <div class="card h-100">
          <img src="<?= $product['Product_Picture'] ?>" alt="<?= $product['Product_Name'] ?>" class="img-fluid">

          <div class="card-body">
            <h5 class="card-title"><?= $product['Product_Name'] ?></h5>

            <p class="card-text">
              <?= $product['Product_Description'] ?>
            </p>

            <a href="<?= base_url("/store/" . $product['Product_Code']) ?>">Selengkapnya</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="d-flex justify-content-center">
    <?= $pager->links('products', 'bootstrap_pagination') ?>
  </div>
</div>

<?= $this->endSection() ?>
<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col-md-6 my-3">
      <img class="img-fluid" src="<?= $product['product_picture'] ?>" alt="Sepatu Converse">
    </div>

    <div class="col-md-6 my-3">
      <h1><?= $product['product_name'] ?></h1>

      <p style="text-align: justify;">
        <?= $product['product_description'] ?>
      </p>

      <p class="display-6">
        Rp. <?= $product['product_price'] ?>
      </p>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
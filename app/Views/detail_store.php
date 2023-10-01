<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col-md-6 my-3">
      <img class="img-fluid" src="<?= $product['Product_Picture'] ?>" alt="Sepatu Converse">
    </div>

    <div class="col-md-6 my-3">
      <h1><?= $product['Product_Name'] ?></h1>

      <p style="text-align: justify;">
        <?= $product['Product_Description'] ?>
      </p>

      <p class="display-6">
        Rp. <?= $product['Product_Price'] ?>
      </p>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
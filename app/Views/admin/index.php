<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <h1 class="py-3">Dashboard</h1>

  <div class="row">
    <div class="mb-md-3 col-md-6">
      <div class="card bg-primary text-white">
        <div class="card-body">
          <h2>
            <i class="fa-solid fa-boxes-stacked"></i>
            Barang Masuk
          </h2>

          <p class="h3">
            <?php if (is_null($sum_product_in) || $sum_product_in < 0) : ?>
              0
            <?php else : ?>
              <?= $sum_product_in ?>
            <?php endif; ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body bg-dark text-white">
          <h2>
            <i class="fa-solid fa-box"></i>
            Barang Keluar
          </h2>

          <p class="h3">
            200
          </p>
        </div>
      </div>
    </div>
  </div>

  <h1 class="py-3">Riwayat Barang</h1>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Quantity</th>
        <th scope="col">Date In</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product) : ?>
        <tr>
          <td><?= $product['Product_Code'] ?></td>
          <td><?= $product['Product_Name'] ?></td>
          <td><?= $product['quantity'] ?></td>
          <td><?= $product['date_in'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?= $this->endSection() ?>
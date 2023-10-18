<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content_admin') ?>
<div class="w-100 p-4">
  <div class="mb-5">
    <h4 class="fw-bold">Data Statistik</h4>
    <div>
      <canvas id="productChart" class="w-100"></canvas>
    </div>
  </div>
  <div class="">
    <h4 class="fw-bold">Riwayat Barang</h4>
    <table class="table table-striped">
      <thead align="center">
        <tr class="text-uppercase fs-14">
          <th scope="col">No</th>
          <th scope="col">Id</th>
          <th scope="col">Total Barang</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Kategori</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product) : ?>
          <tr>
            <td><?= $product['product_code'] ?></td>
            <td><?= $product['product_name'] ?></td>
            <td><?= $product['quantity'] ?></td>
            <td><?= $product['date_in'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection() ?>
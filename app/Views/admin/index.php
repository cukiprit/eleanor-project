<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="">
  <div class="mb-5">
    <h4 class="fw-bold">Data Statistik</h4>
    <div>
      <canvas id="productChart" class="w-100"></canvas>
    </div>
  </div>
  <div class="">
    <h4 class="fw-bold">Riwayat Barang Masuk</h4>
    <table class="table table-bordered">
      <thead align="center">
        <tr class="text-uppercase fs-14">
          <th scope="col">Nama Produk</th>
          <th scope="col">Quantity</th>
          <th scope="col">Tanggal Masuk</th>
        </tr>
      </thead>
      <tbody class="fs-14">
        <?php foreach ($products_in as $product_in) : ?>
        <tr>
          <td style="max-width: 300px;"><?= $product_in['product_name'] ?></td>
          <td align="center"><?= $product_in['quantity'] ?></td>
          <td align="center"><?= $product_in['date_in'] ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  <div class="">
    <h4 class="fw-bold">Riwayat Barang Keluar</h4>
    <table class="table table-bordered">
      <thead align="center">
        <tr class="text-uppercase fs-14">
          <th scope="col">Nama Produk</th>
          <th scope="col">Quantity</th>
          <th scope="col">Tanggal Masuk</th>
        </tr>
      </thead>
      <tbody class="fs-14">
        <?php foreach ($products_out as $product_out) : ?>
        <tr>
          <td style="max-width: 300px;"><?= $product_in['product_name'] ?></td>
          <td align="center"><?= $product_in['quantity'] ?></td>
          <td align="center"><?= $product_in['date_out'] ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="">
  <div class="mb-5">
    <h4 class="fw-bold">Data Statistik</h4>
    <div>
      <canvas id="myChart" class="w-100"></canvas>
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
      <tbody align="center" class="fs-14">
        <tr>
          <td>1</td>
          <td>02837482734987</td>
          <td>20</td>
          <td>10/05/2023</td>
          <td>masuk</td>
        </tr>
        <tr>
          <td>2</td>
          <td>02837482734987</td>
          <td>20</td>
          <td>10/05/2023</td>
          <td>masuk</td>
        </tr>
        <tr>
          <td>3</td>
          <td>02837482734987</td>
          <td>20</td>
          <td>10/05/2023</td>
          <td>masuk</td>
        </tr>
        <tr>
          <td>4</td>
          <td>02837482734987</td>
          <td>20</td>
          <td>10/05/2023</td>
          <td>masuk</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection() ?>
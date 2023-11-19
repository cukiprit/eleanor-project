<?= $this->extend('layout/master_admin_layout') ?>

<?= $this->section('content') ?>
<div class="">
  <div class="mb-5">
    <h4 class="fw-bold m-0 mb-4">Manajemen Administrator</h4>
    <table class="table table-bordered">
      <thead>
        <tr class="fs-15">
          <th scope="col">User ID</th>
          <th scope="col">Nama Admin</th>
          <th scope="col">Email</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2</td>
          <td>Naufal Zaul Karim</td>
          <td>naufalzaulkarim@gmail.com</td>
          <td>
            <button type="button" class="btn btn-danger fs-14" data-bs-toggle="modal" data-bs-target="#hapusProdukMasukModal" data-product-code="">Hapus</button>
          </td>
        </tr>

        <!-- Modal Hapus -->
        <div class="modal fade" id="hapusProdukMasukModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="hapusProdukMasuk" class="btn btn-danger">Hapus</button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Hapus -->
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection() ?>
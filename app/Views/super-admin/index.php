<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>
<div class="">
  <div class="mb-5">
    <h4 class="fw-bold m-0 mb-4">Manajemen Administrator</h4>
    <div class="my-3 text-end">
      <button class="btn btn-success px-4 fs-15" data-bs-toggle="modal" data-bs-target="#tambahModal">
        Tambah Admin
      </button>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr class="fs-15">
          <th scope="col">User ID</th>
          <th scope="col">Nama Admin</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2</td>
          <td>Naufal Zaul Karim</td>
          <td>naufalzaulkarim@gmail.com</td>
          <td>Admin 1</td>
          <td>
            <button type="button" class="btn btn-success fs-14" data-bs-toggle="modal" data-bs-target="#editModal" data-product-code="">Edit</button>
            <button type="button" class="btn btn-danger fs-14" data-bs-toggle="modal" data-bs-target="#hapusProdukMasukModal" data-product-code="">Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Admin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="">
          <div class="modal-body">
            <form id="formEdit" method="post" action="" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Admin</label>
                <input type="text" id="nama" name="product_name" class="form-control">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email_admin" class="form-control">
              </div>
              <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" aria-label="Default select example" id="role">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Edit</button>
              </div>
            </form>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End ModalTambah -->

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Admin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formEdit" method="post" action="" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Admin</label>
            <input type="text" id="nama" name="product_name" class="form-control">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email_admin" class="form-control">
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" aria-label="Default select example" id="role">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Edit -->


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
<?= $this->endSection() ?>
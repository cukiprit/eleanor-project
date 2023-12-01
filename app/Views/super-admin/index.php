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
          <th scope="col">Nama Admin</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user) : ?>
          <!-- Modal Edit -->
          <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Admin</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="formEdit" method="post" action="<?= base_url('/admin/edit_user/') . $user['user_id'] ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama Admin</label>
                      <input type="text" id="nama" name="name" placeholder="Masukkan Nama Admin" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" id="email" name="email" placeholder="Masukkan Email" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="role" class="form-label">Role</label>
                      <select class="form-select" aria-label="Default select example" id="role" name="role">
                        <option selected>Pilih Role</option>
                        <option value="Super-Admin">Super Admin</option>
                        <option value="Admin-1">Admin-1</option>
                        <option value="Admin-2">Admin-2</option>
                      </select>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modal Edit -->

          <!-- Modal Hapus -->
          <div class="modal fade" id="hapusUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <button type="button" id="hapusUser" class="btn btn-danger">Hapus</button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modal Hapus -->

          <tr>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['role'] ?></td>
            <td>
              <button type="button" class="btn btn-warning text-white fs-14" data-bs-toggle="modal" data-bs-target="#editUserModal" data-user-id="<?= $user['user_id'] ?>">Edit</button>
              <button type="button" class="btn btn-danger fs-14" data-bs-toggle="modal" data-bs-target="#hapusUserModal" data-user-id="<?= $user['user_id'] ?>">Hapus</button>
            </td>
          </tr>
        <?php endforeach ?>
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
        <form method="post" enctype="multipart/form-data" action="<?= base_url('/admin/tambah_user') ?>">
          <div class="modal-body">
            <form id="formEdit" method="post" action="" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Admin</label>
                <input type="text" id="nama" name="name" placeholder="Masukkan Nama Admin" class="form-control">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan Email" class="form-control">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="email" name="password" placeholder="Masukkan Password" class="form-control">
              </div>
              <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" aria-label="Default select example" id="role" name="role">
                  <option selected>Pilih Role</option>
                  <option value="Super-Admin">Super Admin</option>
                  <option value="Admin-1">Admin-1</option>
                  <option value="Admin-2">Admin-2</option>
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End ModalTambah -->
<?= $this->endSection() ?>
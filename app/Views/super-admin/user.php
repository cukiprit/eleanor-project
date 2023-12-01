<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <h1>Tambah User</h1>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-bs-toggle="modal" data-bs-target="#tambahUserModal">
    <button class="btn btn-success">+ Tambah User</button>
  </div>

  <div class="modal fade" id="tambahUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
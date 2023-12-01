<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div>
  <div class="mb-4">
    <h4 class="fw-bold">Dashboard User</h4>
  </div>

  <div class="row">
    <div class="col">
      <h4 class="fw-bold">User</h4>

      <table class="table table-striped">
        <thead align="center">
          <tr class="text-uppercase fs-14">
            <th>Nama User</th>
            <th>role</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody align="center" class="fs-14">
          <tr>
            <td>Kontol</td>
            <td>123</td>
            <td>
              <div class="d-block">
                <a href="/edit_user" class="btn btn-success">Edit</a>
                <a href="/delete_user" class="btn btn-danger">Delete </a>
              </div>
            </td>
          </tr>
          <tr>
            <td>Kontol</td>
            <td>123</td>
            <td>
              <div class="d-block">
                <a href="/edit_user" class="btn btn-success">Edit</a>
                <a href="/delete_user" class="btn btn-danger">Delete </a>
              </div>
            </td>
          </tr>
          <tr>
            <td>Kontol</td>
            <td>123</td>
            <td>
              <div class="d-block">
                <a href="/edit_user" class="btn btn-success">Edit</a>
                <a href="/delete_user" class="btn btn-danger">Delete </a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
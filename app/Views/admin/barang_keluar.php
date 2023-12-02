<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <h1>Tambah Barang keluar</h1>

  <!-- Modal Tambah -->
  <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-bs-toggle="modal" data-bs-target="#tambahModal">
    <button class="btn btn-success">+ Barang Keluar</button>
  </div>

  <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Barang Keluar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url('/admin/barang_keluar') ?>">

            <?php if (isset($validation)) : ?>
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            <?php endif; ?>

            <div class="mb-3">
              <label for="Nama" class="form-label">Nama Barang</label>
              <select class="form-select" name="product_name">
                <option selected>Pilih Barang</option>
                <?php foreach ($products as $product) : ?>
                  <option value="<?= $product['product_code'] ?>"><?= $product['product_name'] ?></option>
                <?php endforeach; ?>
              </select>

              <?php if ($validation->hasError('product_name')) : ?>
                <div class="alert alert-danger" role="alert">
                  <?= $validation->getError('product_name') ?>
                </div>
              <?php endif; ?>
            </div>

            <div class="row mb-3">
              <div class="col-6">
                <label for="Nama" class="form-label">Tanggal Barang Masuk</label>
                <input type="date" name="date_out" class="form-control">

                <?php if ($validation->hasError('date_out')) : ?>
                  <div class="alert alert-danger" role="alert">
                    <?= $validation->getError('date_out') ?>
                  </div>
                <?php endif; ?>
              </div>

              <div class="col-6">
                <label for="Nama" class="form-label">Jumlah Barang Masuk</label>
                <input type="number" name="quantity" class="form-control">

                <?php if ($validation->hasError('quantity')) : ?>
                  <div class="alert alert-danger" role="alert">
                    <?= $validation->getError('quantity') ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End ModalTambah -->

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Quantity</th>
        <th scope="col">Tanggal Masuk</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products_out as $product_out) : ?>
        <!-- Modal Edit -->
        <div class="modal fade" id="editProdukKeluarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Barang Keluar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="post" id="formEdit" action="<?= base_url('/admin/edit_barang_keluar/') . $product_out['code_product_out'] ?>">
                  <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Barang</label>
                    <select class="form-select" name="product_name">
                      <option selected>Pilih Barang</option>
                      <?php foreach ($products as $product) : ?>
                        <option value="<?= $product['product_code'] ?>"><?= $product['product_name'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>

                  <div class="row mb-3">
                    <div class="col-6">
                      <label for="Nama" class="form-label">Tanggal Barang Masuk</label>
                      <input type="date" name="date_out" class="form-control">
                    </div>

                    <div class="col-6">
                      <label for="Nama" class="form-label">Jumlah Barang Masuk</label>
                      <input type="number" name="quantity" class="form-control">
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" data-product-code="<?= $product_out['code_product_out'] ?>">Edit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Edit -->

        <!-- Modal Hapus -->
        <div class="modal fade" id="hapusProdukKeluarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <button type="button" id="hapusProdukKeluar" class="btn btn-danger">Hapus</button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Hapus -->

        <tr>
          <td><?= $product_out['code_product_out'] ?></td>
          <td><?= $product_out['product_name'] ?></td>
          <td><?= $product_out['quantity'] ?></td>
          <td><?= $product_out['date_out'] ?></td>
          <td>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusProdukKeluarModal" data-product-code="<?= $product_out['code_product_out'] ?>">Hapus</button>
            <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#editProdukKeluarModal" data-product-code="<?= $product_out['code_product_out'] ?>">
              Edit
            </button>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
<?= $this->endSection() ?>
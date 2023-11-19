<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="">
  <h4 class="fw-bold m-0">Barang Masuk</h4>
  <div class="my-3 text-end">
    <button class="btn btn-success px-4 fs-15" data-bs-toggle="modal" data-bs-target="#tambahModal">
      Tambah Barang Masuk
    </button>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr class="fs-15">
        <th scope="col" style="width: 200px;">No</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Quantity</th>
        <th scope="col">Tanggal Masuk</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products_in as $product_in) : ?>
      <tr class="fs-15" style="vertical-align: middle;">
        <td class="d-inline-block text-truncate border-start border-0"
          style="max-width: 200px; height: 3.2rem; padding: 8% 8px;">
          <?= $product_in['code_product_in'] ?></td>
        <td><?= $product_in['product_name'] ?></td>
        <td><?= $product_in['quantity'] ?></td>
        <td><?= $product_in['date_in'] ?></td>
        <td>
          <button type="button" class="btn btn-danger fs-14" data-bs-toggle="modal"
            data-bs-target="#hapusProdukMasukModal"
            data-product-code="<?= $product_in['code_product_in'] ?>">Hapus</button>
          <button type="button" class="btn btn-warning fs-14 text-white" data-bs-toggle="modal"
            data-bs-target="#editProdukMasukModal" data-product-code="<?= $product_in['code_product_in'] ?>">
            Edit
          </button>
        </td>
      </tr>
      <!-- Modal Edit -->
      <div class="modal fade" id="editProdukMasukModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Barang Masuk</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post"
                action="<?= base_url('/admin/edit_barang_masuk/') . $product_in['code_product_in'] ?>">
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
                    <input type="date" name="date_in" class="form-control">
                  </div>

                  <div class="col-6">
                    <label for="Nama" class="form-label">Jumlah Barang Masuk</label>
                    <input type="number" name="quantity" class="form-control">
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
      <!-- End Modal Edit -->

      <!-- Modal Hapus -->
      <div class="modal fade" id="hapusProdukMasukModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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

      <?php endforeach ?>
    </tbody>
  </table>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Barang Masuk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('/admin/barang_masuk') ?>">

          <?php if (isset($validation)) : ?>
          <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors() ?>
          </div>
          <?php endif ?>

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
              <input type="date" name="date_in" class="form-control">

              <?php if ($validation->hasError('date_in')) : ?>
              <div class="alert alert-danger" role="alert">
                <?= $validation->getError('date_in') ?>
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
<?= $this->endSection() ?>
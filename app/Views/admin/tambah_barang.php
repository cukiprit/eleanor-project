<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <h1>Tambah Barang</h1>

  <!-- Modal Tambah -->
  <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-bs-toggle="modal" data-bs-target="#tambahModal">
    <button class="btn btn-success">+ Tambah Barang</button>
  </div>

  <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?= base_url('/admin/tambah_barang') ?>">
            <?php if (isset($errors)) : ?>
              <div class="d-block w-80 alert alert-warning my-2">
                <ul>
                  <?php foreach ($errors as $error) : ?>
                    <li>
                      <?= $error ?>
                    </li>
                  <?php endforeach ?>
                </ul>
              </div>
            <?php endif; ?>

            <div class="mb-3">
              <label for="Nama" class="form-label">Nama Barang</label>
              <input type="text" name="nama_barang" class="form-control">
            </div>

            <div class="row mb-3">
              <div class="col-6">
                <label for="Nama" class="form-label">Harga Barang</label>
                <input type="number" name="harga_barang" class="form-control">
              </div>

              <div class="col-6">
                <label for="Nama" class="form-label">Stok Barang</label>
                <input type="number" name="stok_barang" class="form-control">
              </div>
            </div>

            <div class="mb-3">
              <label for="Nama" class="form-label">Deskripsi Barang</label>
              <textarea name="deskripsi_barang" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
              <label for="formFile" class="form-label">Upload Gambar Barang</label>
              <input class="form-control" name="gambar_barang" type="file" id="formFile">
            </div>

            <div class="mb-3">
              <img class="img-fluid" id="imagePreview">
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
        <th scope="col">Price</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product) : ?>
        <!-- Modal Edit -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Barang</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="formEdit" method="post" action="<?= base_url('admin/edit_barang/') . $product['product_code'] ?>">
                  <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Barang</label>
                    <input type="text" name="product_name" class="form-control">
                  </div>

                  <div class="row mb-3">
                    <div class="col-6">
                      <label for="Nama" class="form-label">Harga Barang</label>
                      <input type="number" name="product_price" class="form-control">
                    </div>

                    <div class="col-6">
                      <label for="Nama" class="form-label">Stok Barang</label>
                      <input type="number" name="product_stock" class="form-control">
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="Nama" class="form-label">Deskripsi Barang</label>
                    <textarea class="form-control" name="product_description" rows="3"></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Gambar Barang</label>
                    <input class="form-control" name="product_picture" type="file" id="formFile">
                  </div>

                  <div class="mb-3">
                    <img class="img-fluid" id="imagePreview">
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

        <tr>
          <td><?= $product['product_code'] ?></td>
          <td><?= $product['product_name'] ?></td>
          <td><?= $product['product_stock'] ?></td>
          <td>Rp. <?= $product['product_price'] ?></td>
          <td>
            <a href="<?= base_url('admin/hapus_barang/') . $product['product_code'] ?>" class="btn btn-danger">Hapus</a>
            <!-- <button type="button" class="btn btn-danger">Hapus</button> -->
            <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#editModal" data-product-code="<?= $product['product_code'] ?>">
              Edit
            </button>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
<?= $this->endSection() ?>
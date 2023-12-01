<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="">
  <h4 class="fw-bold m-0">Tambah Barang</h4>
  <div class="my-3 text-end">
    <button class="btn btn-success px-4 fs-15" data-bs-toggle="modal" data-bs-target="#tambahModal">
      Tambah Barang
    </button>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr class="fs-15" align="center">
        <th scope="col" style="width: 200px;">No</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product) : ?>
      <tr class="border fs-15" style="vertical-align: middle;">
        <td class="d-inline-block text-truncate border-0" style="max-width: 200px; height: 3.2rem; padding: 8% 8px;">
          <?= $product['product_code'] ?></td>
        <td style="max-width: 300px;"><?= $product['product_name'] ?></td>
        <td align="center"><?= $product['product_stock'] ?></td>
        <td align="center">Rp. <?= $product['product_price'] ?></td>
        <td align="center">
          <button type="button" class="btn btn-warning fs-14 text-white" data-bs-toggle="modal"
            data-bs-target="#editModal" data-product-code="<?= $product['product_code'] ?>">
            Edit
          </button>
          <button type="button" class="btn btn-danger fs-14" data-bs-toggle="modal" data-bs-target="#hapusProdukModal"
            data-product-code="<?= $product['product_code'] ?>">
            Hapus
          </button>
        </td>
      </tr>

      <!-- Modal Edit -->
      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Barang</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="formEdit" method="post"
                action="<?= base_url('admin/edit_barang/') . $product['product_code'] ?>" enctype="multipart/form-data">
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

      <!-- Modal Hapus -->
      <div class="modal fade" id="hapusProdukModal" tabindex="-1" aria-labelledby="exampleModalLabel"
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
              <button type="button" id="hapusProduk" class="btn btn-danger">Hapus Data</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal Hapus -->
      <?php endforeach ?>
    </tbody>
  </table>
  <div class="d-flex justify-content-center my-4">
    <?= $pager->links('products', 'bootstrap_pagination') ?>
  </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="<?= base_url('/admin/tambah_barang') ?>">
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
            <textarea name="product_description" class="form-control" rows="3"></textarea>
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
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End ModalTambah -->

<?= $this->endSection() ?>
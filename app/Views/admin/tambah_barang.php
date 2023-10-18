<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content_admin') ?>
<div class="w-100 px-5 py-4">

  <h4 class="fw-bold">Manajemen Barang</h4>

  <div class="my-4 w-100 row justify-content-between m-0">
    <!-- <div class="col-4 d-flex align-items-center border rounded-pill px-3">
      <label for="search" class="text-secondary">
        <i class="fa-solid fa-magnifying-glass fs-15"></i>
      </label>
      <input class="form-control border-0 w-100 h-100 ms-2 fs-15" type="search" name="search" id="search"
        placeholder="Temukan barang">
    </div> -->
    <div class="col-12 text-end">
      <button class="btn btn-primary px-3 fs-15" data-bs-toggle="modal" data-bs-target="#tambahModal">
        <i class="fa-solid fa-plus me-1"></i>
        Tambah Barang
      </button>
    </div>
  </div>
  <div class="border rounded-2">
    <table class="table">
      <thead>
        <tr class="text-capitalize text-secondary fs-15" style="border-bottom: 2px solid #d1d5db;">
          <th scope="col" class="p-3">Kode Barang</th>
          <th scope="col" class="p-3">Nama</th>
          <th scope="col" class="p-3">Jumlah</th>
          <th scope="col" class="p-3">Harga</th>
          <th scope="col" class="p-3">Tanggal</th>
          <th scope="col" class="p-3"></th>
        </tr>
      </thead>
      <tbody class="fs-15">
        <?php foreach ($products as $product) : ?>
        <tr class="align-baseline">
          <td class="p-3"><?= $product['product_code'] ?></td>
          <td class="p-3"><?= $product['product_name'] ?></td>
          <td class="p-3 text-center"><?= $product['product_stock'] ?></td>
          <td class="p-3">Rp. <?= $product['product_price'] ?></td>
          <td class="p-3">10/10/2023</td>
          <td class="p-3">
            <div class="btn-group">
              <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end shadow">
                <li>
                  <button type="button" class="dropdown-item fs-15" data-bs-toggle="modal" data-bs-target="#editModal"
                    data-product-code="<?= $product['product_code'] ?>">
                    <i class="fas fa-pen me-2"></i>
                    Edit
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item fs-15" data-bs-toggle="modal"
                    data-bs-target="#hapusProdukModal" data-product-code="<?= $product['product_code'] ?>">
                    <i class="fas fa-trash me-2"></i>
                    Hapus
                  </button>
                </li>
              </ul>
            </div>
          </td>
          <!-- <td>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusProdukModal"
            data-product-code="<?= $product['product_code'] ?>">Hapus</button>
          <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#editModal"
            data-product-code="<?= $product['product_code'] ?>">
            Edit
          </button>
        </td> -->
        </tr>

        <!-- Modal Tambah -->
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog me-4">
            <div class="modal-content px-3 py-2" style="border-radius: 15px;">
              <div class="modal-header align-items-start border-0">
                <div class="me-4">
                  <p class="modal-title fw-bold fs-5" id="exampleModalLabel">Tambahkan Data Barang</p>
                  <p class="m-0 fs-15 text-secondary">Kelola barang sesuai pengaturan gudang</p>
                </div>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"
                  style="font-size: 12px;"></button>
              </div>
              <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="<?= base_url('/admin/tambah_barang') ?>">
                  <div class="mb-3">
                    <label for="Nama" class="form-label fw-bold fs-15">Nama Barang*</label>
                    <input type="text" name="product_name" class="form-control fs-15" placeholder="Nama barang">
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <label for="Nama" class="form-label fw-bold fs-15">Harga Barang*</label>
                      <input type="number" name="product_price" class="form-control fs-15" placeholder="Harga barang">
                    </div>
                    <div class="col">
                      <label for="Nama" class="form-label fw-bold fs-15">Stok Barang*</label>
                      <input type="number" name="product_stock" class="form-control fs-15" placeholder="Stok barang">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="Nama" class="form-label fw-bold fs-15">Deskripsi Barang*</label>
                    <textarea name="product_description" class="form-control fs-15" rows="3"
                      placeholder="Deskripsikan barang"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label fw-bold">Upload Gambar Barang*</label>
                    <input class="form-control fs-15" name="product_picture" type="file" id="formFile">
                  </div>
                  <div class="mb-3">
                    <img class="img-fluid" id="imagePreview">
                  </div>
                  <div class="row modal-footer border-0">
                    <button type="button" class="col btn btn-outline-secondary fs-15" data-bs-dismiss="modal">Buang
                      masukan</button>
                    <button type="submit" class="col btn btn-primary fs-15">Tambahkan barang</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- End ModalTambah -->

        <!-- Modal Edit -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog me-4">
            <div class="modal-content px-3 py-2" style="border-radius: 15px;">
              <div class="modal-header align-items-start border-0">
                <p class="modal-title fw-bold fs-5" id="exampleModalLabel">Edit Barang</p>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"
                  style="font-size: 12px;"></button>
              </div>
              <div class="modal-body">
                <form id="formEdit" method="post"
                  action="<?= base_url('admin/edit_barang/') . $product['product_code'] ?>"
                  enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="Nama" class="form-label fw-bold fs-15">Nama Barang</label>
                    <input type="text" name="product_name" class="form-control fs-15">
                  </div>

                  <div class="row mb-3">
                    <div class="col-6">
                      <label for="Nama" class="form-label fw-bold fs-15">Harga Barang</label>
                      <input type="number" name="product_price" class="form-control fs-15">
                    </div>

                    <div class="col-6">
                      <label for="Nama" class="form-label fw-bold fs-15">Stok Barang</label>
                      <input type="number" name="product_stock" class="form-control fs-15">
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="Nama" class="form-label fw-bold fs-15">Deskripsi Barang</label>
                    <textarea class="form-control fs-15" name="product_description" rows="3"></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="formFile" class="form-label fw-bold fs-15">Upload Gambar Barang</label>
                    <input class="form-control fs-15" name="product_picture" type="file" id="formFile">
                  </div>

                  <div class="mb-3">
                    <img class="img-fluid" id="imagePreview">
                  </div>

                  <div class="row modal-footer border-0">
                    <button type="button" class="col btn btn-outline-secondary fs-15" data-bs-dismiss="modal">Buang
                      perubahan</button>
                    <button type="submit" class="col btn btn-success fs-15">Edit barang</button>
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
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content px-3 py-2" style="border-radius: 15px;">
              <div class="modal-header align-items-start border-0">
                <h1 class="modal-title fw-bold fs-5" id="exampleModalLabel">Hapus Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                  style="font-size: 12px;"></button>
              </div>
              <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
              </div>
              <div class="row modal-footer border-0">
                <button type="button" class="col btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="hapusProduk" class="col btn btn-danger">Hapus Data</button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Hapus -->
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection() ?>
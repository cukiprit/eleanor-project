<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="m-0 my-5 pt-5 px-4 px-md-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold">Daftar Barang Tersedia</h2>
    <p class="fs-17">List barang yang tersedia di gudang dan dapat dicek ketersediaan barang sesuai filter barang</p>
  </div>

  <div class="my-5">
    <div class="">
      <div class="d-block text-center d-md-flex justify-content-end align-items-center my-3">
        <p class="fw-bold text-secondary m-0 me-3">SORT BY</p>
        <div class="d-flex align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown"
              aria-expanded="false">
              Jumlah Stok
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><button class="dropdown-item" type="button">0-50</button></li>
              <li><button class="dropdown-item" type="button">50-200</button></li>
              <li><button class="dropdown-item" type="button">200+</button></li>
            </ul>
          </div>
          <div class="btn-group">
            <button type="button" class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown"
              aria-expanded="false">
              Harga Barang
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><button class="dropdown-item" type="button">
                  < Rp 50.000 </button>
              </li>
              <li><button class="dropdown-item" type="button">
                  < Rp 200.000</button>
              </li>
              <li><button class="dropdown-item" type="button">> Rp 200.000</button></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="d-flex flex-wrap justify-content-center">
        <?php foreach ($products as $product) : ?>
        <div class="h-100 p-2 my-2 card-style">
          <a href="<?= base_url("/store/" . $product['product_code']) ?>" class="text-decoration-none card-style">
            <div class="w-100 p-1" style="height: 250px;">
              <img src="<?= $product['product_picture'] ?>" alt="<?= $product['product_name'] ?>"
                class="w-100 h-100 radius-10">
            </div>
            <div class="card-body p-2 radius-15">
              <p class="card-title text-capitalize m-0 fs-17">
                <?= $product['product_name'] ?>
              </p>
              <p class="card-text my-1 text-danger fs-17">Rp
                <?= $product['product_price'] ?></p>
            </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="d-flex justify-content-center my-4">
      <?= $pager->links('products', 'bootstrap_pagination') ?>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
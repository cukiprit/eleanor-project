<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="m-0 my-5 pt-5 px-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold">Lorem ipsum dolor sit amet.</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, incidunt</p>
  </div>

  <div class="my-5">
    <div class="">
      <h4 class="fw-bold">Daftar Seluruh Produk</h4>
      <div class="d-flex justify-content-end align-items-center my-3">
        <p class="fw-bold text-secondary m-0 me-3">SORT BY</p>
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

      <div class="d-flex flex-wrap justify-content-center">
        <?php foreach ($products as $product) : ?>
        <div class="h-100 p-2 my-2 card-style">
          <a href="<?= base_url("/store/" . $product['product_code']) ?>" class="text-decoration-none card-style">
            <div class="w-100 p-1" style="height: 250px;">
              <img src="<?= base_url('img/annie-williams-FlP6C5pkMKs-unsplash.jpg') ?>"
                alt="<?= $product['product_name'] ?>" class="w-100 h-100 radius-10">
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

  <?= $this->endSection() ?>










  <!-- <div class="h-100 p-2 my-2 card-style">
  <a href="<?= base_url("/store/" . $product['product_code']) ?>" class="text-decoration-none card-style">
    <div class="w-100 p-1" style="height: 300px;">
      <img src="<?= $product['product_picture'] ?>" alt="<?= $product['product_name'] ?>" class="w-100 h-100 radius-15">
      <img src="<?= base_url('img/annie-williams-FlP6C5pkMKs-unsplash.jpg') ?>" alt="<?= $product['product_name'] ?>"
        class="w-100 h-100 radius-15">
    </div>
    <div class="card-body p-3 radius-15">
      <p class="card-title text-capitalize m-0 fs-17">
        <?= $product['product_name'] ?>
      </p>
      <p class="card-text my-1 text-danger fs-17">Rp
        <?= $product['product_price'] ?></p>
    </div>
  </a>
</div> -->










  <!-- <a href="<?= base_url("/store/" . $product['product_code']) ?>" class="col-lg-4 col-md-5 mb-4 text-dark text-decoration-none">
  <div class="card h-100">
    <img src="<?= $product['product_picture'] ?>" alt="<?= $product['product_name'] ?>" class="img-fluid">
    <div class="card-body">
      <h5 class="card-title text-capitalize"><?= $product['product_name'] ?></h5>
      <p class="card-text text-primary">Rp <?= $product['product_price'] ?></p>
    </div>
  </div>
</a> -->
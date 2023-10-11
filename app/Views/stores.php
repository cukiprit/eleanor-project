<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="m-0 px-5">
  <div class="text-center my-5">
    <h2 class="fw-bold">Lorem ipsum dolor sit amet.</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, incidunt</p>
  </div>

  <div class="my-5">
    <h4 class="fw-bold">Paling Banyak Transaksi</h4>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="d-flex" data-bs-interval="10000">
          <div class="h-100 p-2 my-2 card-style">
            <a href="" class="text-decoration-none card-style">
              <div class="w-100 p-1" style="height: 300px;">
                <img src="<?= base_url('img/annie-williams-FlP6C5pkMKs-unsplash.jpg') ?>" class="w-100 h-100 radius-15">
              </div>
              <div class="card-body p-3 radius-15">
                <p class="card-title text-capitalize m-0 fs-18">
                  Lorem ipsum dolor sit amet.
                </p>
                <p class="card-text my-1 text-danger fs-18">Rp
                  10.000.000</p>
              </div>
            </a>
          </div>
          <div class="h-100 p-2 my-2 card-style">
            <a href="" class="text-decoration-none card-style">
              <div class="w-100 p-1" style="height: 300px;">
                <img src="<?= base_url('img/annie-williams-FlP6C5pkMKs-unsplash.jpg') ?>" class="w-100 h-100 radius-15">
              </div>
              <div class="card-body p-3 radius-15">
                <p class="card-title text-capitalize m-0 fs-18">
                  Lorem ipsum dolor sit amet.
                </p>
                <p class="card-text my-1 text-danger fs-18">Rp
                  10.000.000</p>
              </div>
            </a>
          </div>
          <div class="h-100 p-2 my-2 card-style">
            <a href="" class="text-decoration-none card-style">
              <div class="w-100 p-1" style="height: 300px;">
                <img src="<?= base_url('img/annie-williams-FlP6C5pkMKs-unsplash.jpg') ?>" class="w-100 h-100 radius-15">
              </div>
              <div class="card-body p-3 radius-15">
                <p class="card-title text-capitalize m-0 fs-18">
                  Lorem ipsum dolor sit amet.
                </p>
                <p class="card-text my-1 text-danger fs-18">Rp
                  10.000.000</p>
              </div>
            </a>
          </div>
          <div class="h-100 p-2 my-2 card-style">
            <a href="" class="text-decoration-none card-style">
              <div class="w-100 p-1" style="height: 300px;">
                <img src="<?= base_url('img/annie-williams-FlP6C5pkMKs-unsplash.jpg') ?>" class="w-100 h-100 radius-15">
              </div>
              <div class="card-body p-3 radius-15">
                <p class="card-title text-capitalize m-0 fs-18">
                  Lorem ipsum dolor sit amet.
                </p>
                <p class="card-text my-1 text-danger fs-18">Rp
                  10.000.000</p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="">

    <h4 class="fw-bold">Daftar Seluruh Produk</h4>

    <div class="d-flex justify-content-end align-items-center my-2">
      <p class="fw-bold text-secondary m-0 me-3">SORT BY</p>
      <select name="" id="" class="border-0 mx-3 bg-transparent">
        <option value="">Jumlah stok</option>
        <option value="">Harga</option>
      </select>
      <select name="" id="" class="border-0 mx-3 bg-transparent">
        <option value="">Harga Barang</option>
        <option value="">Harga</option>
      </select>
    </div>

    <div class="d-flex flex-wrap justify-content-center">
      <?php foreach ($products as $product) : ?>
        <div class="h-100 p-2 my-2 card-style">
          <a href="<?= base_url("/store/" . $product['product_code']) ?>" class="text-decoration-none card-style">
            <div class="w-100 p-1" style="height: 300px;">
              <!-- <img src="<?= $product['product_picture'] ?>" alt="<?= $product['product_name'] ?>" class="w-100 h-100 radius-15"> -->
              <img src="<?= base_url('img/annie-williams-FlP6C5pkMKs-unsplash.jpg') ?>" alt="<?= $product['product_name'] ?>" class="w-100 h-100 radius-15">
            </div>
            <div class="card-body p-3 radius-15">
              <p class="card-title text-capitalize m-0 fs-18">
                <?= $product['product_name'] ?>
              </p>
              <p class="card-text my-1 text-danger fs-18">Rp
                <?= $product['product_price'] ?></p>
              <!-- <span>
                Total Stok
                <b><?= $product['product_stock'] ?></b>
                barang
              </span> -->
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




<!-- <a href="<?= base_url("/store/" . $product['product_code']) ?>" class="col-lg-4 col-md-5 mb-4 text-dark text-decoration-none">
  <div class="card h-100">
    <img src="<?= $product['product_picture'] ?>" alt="<?= $product['product_name'] ?>" class="img-fluid">
    <div class="card-body">
      <h5 class="card-title text-capitalize"><?= $product['product_name'] ?></h5>
      <p class="card-text text-primary">Rp <?= $product['product_price'] ?></p>
    </div>
  </div>
</a> -->
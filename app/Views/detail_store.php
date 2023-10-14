<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="px-4 px-md-5 py-6">
  <div class="mb-lg-3">
    <a href="/store" class="d-flex align-items-center btn ps-2 pe-3 mt-2">
      <i class="fas fa-chevron-left me-2"></i>
      Kembali
    </a>
  </div>

  <div class="row flex-column flex-lg-row py-2 mx-0" style="min-height: 75vh;">
    <div class="col col-lg-6 p-0 mb-3 m-auto" style="height: 450px;">
      <img src="<?= base_url("img/domino-164_6wVEHfI-unsplash.jpg") ?>" alt="<?= $product['product_name'] ?>"
        class="w-100 h-100 rounded">
    </div>
    <div class="col p-sm-0 p-lg-4">
      <h1 class="card-title text-capitalize">Sepatu Nike</h1>
      <p class="fs-17 my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis necessitatibus saepe
        reiciendis, autem eos quidem sunt accusantium ipsam officia culpa vel sint voluptatem perferendis veniam aliquam
        natus nihil. Eveniet deserunt aspernatur impedit consectetur totam fugiat quidem. Omnis ab suscipit nostrum quae
        soluta sequi qui aliquid necessitatibus amet expedita consequatur, blanditiis, voluptatem voluptates, illo rem
        labore. Adipisci quaerat sint aliquid similique, ipsum necessitatibus esse molestias magnam eos.</p>

      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item border-top bg-transparent">
          <h2 class="accordion-header bg-transparent">
            <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <p class="fs-17 m-0">Harga Barang</p>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p class="card-text my-2 text-danger fs-17">Rp <?= $product['product_price'] ?></p>
            </div>
          </div>
        </div>

        <div class="accordion-item border-bottom bg-transparent">
          <h2 class="accordion-header bg-transparent">
            <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
              <p class="fs-17 m-0">Total Stok Barang</p>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p class="card-text my-2 fs-17"><?= $product['product_stock'] ?> Barang</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="my-5">
    <h4 class="fw-bold">Barang dengan harga yang sama</h4>
    <div class="d-flex flex-wrap justify-content-center mt-4">
      <div class="h-100 p-2 my-2 card-style">
        <a href="<?= base_url("/store/06850b96-2cd0-31bd-ac96-028a3e3705a6") ?>"
          class="text-decoration-none card-style">
          <div class="w-100 p-1" style="height: 250px;">
            <img src="<?= base_url('img/annie-williams-FlP6C5pkMKs-unsplash.jpg') ?>" alt=""
              class="w-100 h-100 radius-10">
          </div>
          <div class="card-body p-2 radius-15">
            <p class="card-title text-capitalize m-0 fs-17">
              Sepatu Adidas
            </p>
            <p class="card-text my-1 text-danger fs-17">Rp
              50.000</p>
          </div>
        </a>
      </div>
      <div class="h-100 p-2 my-2 card-style">
        <a href="<?= base_url("/store/06850b96-2cd0-31bd-ac96-028a3e3705a6") ?>"
          class="text-decoration-none card-style">
          <div class="w-100 p-1" style="height: 250px;">
            <img src="<?= base_url('img/annie-williams-FlP6C5pkMKs-unsplash.jpg') ?>" alt=""
              class="w-100 h-100 radius-10">
          </div>
          <div class="card-body p-2 radius-15">
            <p class="card-title text-capitalize m-0 fs-17">
              Sepatu Adidas
            </p>
            <p class="card-text my-1 text-danger fs-17">Rp
              50.000</p>
          </div>
        </a>
      </div>
      <div class="h-100 p-2 my-2 card-style">
        <a href="<?= base_url("/store/06850b96-2cd0-31bd-ac96-028a3e3705a6") ?>"
          class="text-decoration-none card-style">
          <div class="w-100 p-1" style="height: 250px;">
            <img src="<?= base_url('img/annie-williams-FlP6C5pkMKs-unsplash.jpg') ?>" alt=""
              class="w-100 h-100 radius-10">
          </div>
          <div class="card-body p-2 radius-15">
            <p class="card-title text-capitalize m-0 fs-17">
              Sepatu Adidas
            </p>
            <p class="card-text my-1 text-danger fs-17">Rp
              50.000</p>
          </div>
        </a>
      </div>
      <div class="h-100 p-2 my-2 card-style">
        <a href="<?= base_url("/store/06850b96-2cd0-31bd-ac96-028a3e3705a6") ?>"
          class="text-decoration-none card-style">
          <div class="w-100 p-1" style="height: 250px;">
            <img src="<?= base_url('img/annie-williams-FlP6C5pkMKs-unsplash.jpg') ?>" alt=""
              class="w-100 h-100 radius-10">
          </div>
          <div class="card-body p-2 radius-15">
            <p class="card-title text-capitalize m-0 fs-17">
              Sepatu Adidas
            </p>
            <p class="card-text my-1 text-danger fs-17">Rp
              50.000</p>
          </div>
        </a>
      </div>
      <div class="h-100 p-2 my-2 card-style">
        <a href="<?= base_url("/store/06850b96-2cd0-31bd-ac96-028a3e3705a6") ?>"
          class="text-decoration-none card-style">
          <div class="w-100 p-1" style="height: 250px;">
            <img src="<?= base_url('img/annie-williams-FlP6C5pkMKs-unsplash.jpg') ?>" alt=""
              class="w-100 h-100 radius-10">
          </div>
          <div class="card-body p-2 radius-15">
            <p class="card-title text-capitalize m-0 fs-17">
              Sepatu Adidas
            </p>
            <p class="card-text my-1 text-danger fs-17">Rp
              50.000</p>
          </div>
        </a>
      </div>
    </div>

  </div>
</div>


<?= $this->endSection() ?>
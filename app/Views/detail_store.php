<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="">
  <a href="/store" class="d-flex align-items-center btn text-white ps-2 pe-3 mt-2 mb-3 rounded-pill fs-18"
    style="background-color: #EE9322; width: fit-content;">
    <i class="fas fa-chevron-left mx-1" style="width: 17px; height: 17px;"></i>
    Kembali
  </a>

  <div class="w-100 row py-2">
    <div class="col-6" style="height: 450px;">
      <img src="<?= base_url("img/domino-164_6wVEHfI-unsplash.jpg") ?>" alt="<?= $product['product_name'] ?>"
        class="w-100 h-100 radius-15">
    </div>
    <div class="col">
      <h2 class="card-title text-capitalize fw-bold">Sepatu Nike</h2>
      <p class="fs-18 my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis necessitatibus saepe
        reiciendis, autem eos quidem sunt accusantium ipsam officia culpa vel sint voluptatem perferendis veniam aliquam
        natus nihil. Eveniet deserunt aspernatur impedit consectetur totam fugiat quidem. Omnis ab suscipit nostrum quae
        soluta sequi qui aliquid necessitatibus amet expedita consequatur, blanditiis, voluptatem voluptates, illo rem
        labore. Adipisci quaerat sint aliquid similique, ipsum necessitatibus esse molestias magnam eos.</p>

      <div class="accordion accordion-flush" id="accordionFlushExample">

        <div class="accordion-item border-top bg-transparent">
          <h2 class="accordion-header bg-transparent">
            <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <p class="fs-18 m-0">Harga Barang</p>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p class="card-text my-2 text-danger fs-18 mb-4">Rp <?= $product['product_price'] ?></p>
            </div>
          </div>
        </div>

        <div class="accordion-item border-bottom bg-transparent">
          <h2 class="accordion-header bg-transparent">
            <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
              <p class="fs-18 m-0">Total Stok Barang</p>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p class="card-text my-2 fs-18"><?= $product['product_stock'] ?> Barang</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<?= $this->endSection() ?>
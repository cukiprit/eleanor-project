<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<!-- Heroes -->
<div class="container px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img class="d-block mx-lg-auto img-fluid" src="<?= base_url("Buy.svg") ?>" alt="Heroes image" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold text-body emphasis lh-1 mb-3">
        Belanja Sepuasnya Dengan Harga Terjangkau
      </h1>

      <p style="text-align: justify;" class="lead">
        Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.
      </p>

      <div class="d-grid gap-2 d-md-flex justify-content md-start">
        <a href="/store" style="background-color: #EE9322;" class="btn btn-primary btn-lg px-4 me-md-2">Belanja Sekarang</a>
      </div>
    </div>
  </div>
</div>
<!-- End of Heroes -->

<?= $this->endSection() ?>
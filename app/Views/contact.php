<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="px-5" style="min-height: 100vh;background-color: #fef3c7;padding-top: 6rem;">
  <div class="text-center mt-2 mb-4">
    <h2 class="fw-bold">Lorem ipsum dolor sit amet.</h2>
    <p class="lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, incidunt</p>
  </div>

  <div class="row w-fit mx-auto rounded bg-white shadow">
    <div class="col-4 p-4 m-2 bg-dark-amber rounded text-white">
      <p class="fw-bold fs-17 m-0 mb-3">Informasi Sosial Media</p>
      <p class="m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum</p>
      <ul class="list-group mt-3">
        <li class="list-group-item bg-dark-amber border-0">
          <a href="" class="d-flex btn text-white fs-17">
            <i class="fab fa-instagram fs-4 me-2"></i>
            Instagram
          </a>
        </li>
        <li class="list-group-item bg-dark-amber border-0">
          <a href="" class="d-flex btn text-white fs-17">
            <i class="fab fa-twitter fs-4 me-2"></i>
            Twitter
          </a>
        </li>
        <li class="list-group-item bg-dark-amber border-0">
          <a href="" class="d-flex btn text-white fs-17">
            <i class="fab fa-facebook fs-4 me-2"></i>
            Facebook
          </a>
        </li>
      </ul>
    </div>
    <div class="col-7 mx-auto p-4">
      <p class="fw-bold fs-17 m-0">Hubungi Melalui Whasapp</p>
      <p class="m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum</p>
      <form action="" class="mt-3">
        <div class="mb-3">
          <label for="pengirim" class="form-label">Nama Pengirim</label>
          <input type="text" class="form-control" id="pengirim" placeholder="Nama pengirim">
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Kotak Pesan</label>
          <textarea class="form-control" id="pesan" rows="3" placeholder="Apa yang ingin kamu tanyakan ?"></textarea>
        </div>
        <div class="mb-3 text-end">
          <button type="submit" class="btn text-white px-4 mt-2 bg-success fs-17">
            <i class="fab fa-whatsapp me-2"></i>
            Kirim pesan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('layout/login_layout') ?>

<?= $this->section('content') ?>
<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="w-100">
    <form action="<?= base_url('/signup') ?>" method="post"
      class="login-form d-flex flex-column justify-content-center align-items-center">
      <img class="d-block mx-auto align-items-center" src="<?= base_url('img/logo/logo-light.png') ?>"
        alt="Eleanor Logo">
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
      <?php endif; ?> <div class="mb-3">
        <div class="mb-3">
          <label for="name" class="form-label">Masukkan Nama Lengkap</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
        </div>
        <label for="email" class="form-label">Masukkan Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Masukkan Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      </div>
      <div class="mb-3">
        <label for="confirm_password" class="form-label">Konfirmasi Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password"
          placeholder="Confirm Password" required>
      </div>
      <div class="mt-4">
        <button type="submit" class="btn text-white text-uppercase w-100" style="background-color: #FF9D08;">Sign
          up</button>
      </div>
    </form>
  </div>
  <div class="col d-none d-lg-flex justify-content-end bg-image min-vh-100 signup-clip_path">
    <div class="d-flex flex-column justify-content-center w-75 h-100 px-4">
      <div class="mb-5">
        <img src="<?= base_url('img/logo/logo-eleanor (1).png') ?>" class="mx-auto" width="150" alt="">
      </div>
      <div class="">
        <h5 class="fw-bold">Lorem ipsum dolor sit amet.</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, veritatis.</p>
      </div>
    </div>
  </div>
</div>
</div>






<div class="container d-flex justify-content-center align-items-center vh-100 d-none">
  <div class="w-100">
    <form action="<?= base_url('/signedup') ?>" method="post"
      class="login-form d-flex flex-column justify-content-center align-items-center">
      <img class="d-block mx-auto align-items-center" src="<?= base_url('img/logo/logo-light.png') ?>"
        alt="Eleanor Logo">

      <h2 class="text-center text-white my-4">Sign Up</h2>
      <div class="form-group mb-3 w-50">
        <input type="text" class="form-control" name="name" placeholder="Name" required>
      </div>
      <div class="form-group mb-3 w-50">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
      </div>
      <div class="form-group mb-3 w-50">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
      <div class="form-group mb-3 w-50">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
      <div class="form-group w-50">
        <button type="submit" class="btn btn-primary w-100 py-2">Sign Up</button>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
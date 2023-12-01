<?= $this->extend('layout/login_layout') ?>

<?= $this->section('content') ?>
<div class="min-vh-100 w-100 row m-0 p-0">
  <div class="col col-lg-6 d-flex align-items-center p-3 p-md-0">
    <form action="<?= base_url('/signup') ?>" method="post" class="login-form mx-auto">
      <div class="mb-3 mb-md-5">
        <div class="mb-5 d-lg-none">
          <img src="<?= base_url('img/logo/logo-eleanor (1).png') ?>" class="mx-auto logo-login" width="150" alt="">
        </div>
        <h3 class="fw-bold">Registrasi Akun</h3>
        <p class="text-secondary">Silahkan login terlebih dahulu untuk akses admin</p>
      </div>
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
      <?php endif; ?>
      <div class="mb-3">
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
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
      </div>
      <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select name="role" id="role" class="form-select">
          <option selected>Role</option>
          <option value="Admin">Admin</option>
          <option value="Super-Admin">Super-Admin</option>
        </select>
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

<?= $this->endSection() ?>
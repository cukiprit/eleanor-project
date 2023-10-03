<?= $this->extend('layout/login_layout') ?>

<?= $this->section('content') ?>
<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="w-100">
    <form action="<?= base_url('/signup') ?>" method="post" class="login-form d-flex flex-column justify-content-center align-items-center">
      <img class="d-block mx-auto align-items-center" src="<?= base_url('img/logo/logo-light.png') ?>" alt="Eleanor Logo">
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
      <h2 class="text-center text-white my-4">Sign Up</h2>
      <div class="form-group mb-3 w-50">
        <input type="text" class="form-control" name="name" placeholder="Name" required>
      </div>
      <div class="form-group mb-3 w-50">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
      <div class="form-group mb-3 w-50">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
      <div class="form-group mb-3 w-50">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
      </div>
      <div class="form-group w-50">
        <button type="submit" class="btn btn-primary w-100 py-2">Sign Up</button>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('layout/login_layout') ?>

<?= $this->section('content') ?>
<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="row">
    <div class="col-12">
      <form action="<?= base_url('/login') ?>" method="post" class="login-form">
        <img src="<?= base_url('img/logo/logo-light.png') ?>" alt="">
        <?php if (session()->getFlashdata('msg')) : ?>
          <div class="alert alert-warning my-4">
            <?= session()->getFlashdata('msg') ?>
          </div>
        <?php endif; ?>
        <h2 class="text-center text-white my-4">Sign In</h2>
        <div class="form-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email Address" required>
        </div>
        <div class="form-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary w-100 py-2">Sign In</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
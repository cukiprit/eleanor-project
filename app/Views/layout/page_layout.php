<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= base_url('img/logo/logo.png') ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
  <title>Eleanor Project</title>
</head>

<body class="d-flex flex-column justify-content-between" style="min-height:100vh; background-color: #fef9c3;">

  <?= $this->include('components/header') ?>

  <?= $this->renderSection('content') ?>

  <?= $this->include('components/footer') ?>

  <script src="<?= base_url("bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
  <script src="<?= base_url("bootstrap/js/bootstrap.min.js") ?>"></script>
</body>

</html>
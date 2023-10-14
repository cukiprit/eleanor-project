<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= base_url('img/logo/logo.png') ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('styles/global.css') ?>">
  <link rel="stylesheet" href="<?= base_url('styles/page_layout-style.css') ?>">
  <title>Eleanor Project</title>
  <script src="<?= base_url("bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
  <script src="<?= base_url("fontawesome-free/js/all.min.js") ?>"></script>

</head>

<body class="d-flex flex-column overflow-lg-hidden px-5">

  <?= $this->include('components/header') ?>

  <?= $this->renderSection('content') ?>

  <?= $this->include('components/footer') ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= base_url('img/logo/logo.png') ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('fontawesome-free/css/all.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('styles/global.css') ?>">
  <link rel="stylesheet" href="<?= base_url('styles/admin_layout-style.css') ?>">

  <title>Eleanor Project</title>
  <script src="<?= base_url("bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
  <script src="<?= base_url("fontawesome-free/js/all.min.js") ?>"></script>
</head>

<body class="d-flex flex-nowrap">

  <?= $this->include('components/sidebar_master_admin') ?>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-adapter-moment/1.0.1/chartjs-adapter-moment.min.js">
  </script>
  <script src="<?= base_url("js/jquery-3.7.1.min.js") ?>"></script>
  <script src="<?= base_url("js/script.js") ?>"></script>
</body>

</html>
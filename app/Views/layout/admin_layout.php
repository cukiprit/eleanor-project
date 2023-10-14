<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= base_url('img/logo/logo.png') ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('fontawesome-free/css/all.min.css') ?>">
  <title>Eleanor Project</title>
  <script src="<?= base_url("bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
  <script src="<?= base_url("fontawesome-free/js/all.min.js") ?>"></script>
</head>

<body class="d-flex flex-nowrap">

  <?= $this->include('components/sidebar') ?>

  <?= $this->renderSection('content') ?>

  <script src="<?= base_url("js/jquery-3.7.1.min.js") ?>"></script>
  <script src="<?= base_url("js/script.js") ?>"></script>

  <script src="<?= base_url("bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
  <script src="<?= base_url("bootstrap/js/bootstrap.min.js") ?>"></script>
  <script src="<?= base_url("fontawesome-free/js/all.min.js") ?>"></script>

  <?php if (strpos($_SERVER['REQUEST_URI'], '/admin') !== false) : ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js" integrity="sha512-SIMGYRUjwY8+gKg7nn9EItdD8LCADSDfJNutF9TPrvEo86sQmFMh6MyralfIyhADlajSxqc7G0gs7+MwWF/ogQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-adapter-moment/1.0.1/chartjs-adapter-moment.min.js" integrity="sha512-hVy4KxCKgnXi2ok7rlnlPma4JHXI1VPQeempoaclV1GwRHrDeaiuS1pI6DVldaj5oh6Opy2XJ2CTljQLPkaMrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <?php endif; ?>
</body>

</html>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#343a40">

  <title>
    <?= $title; ?>
  </title>
  <link rel="shortcut icon" href="<?= asset("icons/logo.svg", false); ?>" type="image/x-icon">

  <link rel="stylesheet" href="<?= package("bootstrap/dist/css/bootstrap.min.css"); ?>" />
  <link rel="stylesheet" href="<?= package("@fortawesome/fontawesome-free/css/all.min.css"); ?>" />
  <link rel="stylesheet" href="<?= package("izitoast/dist/css/iziToast.min.css"); ?>" />
  <link rel="stylesheet" href="<?= package("sweetalert2/dist/sweetalert2.min.css"); ?>" />
  <link rel="stylesheet" href="<?= package("animate.css/animate.min.css"); ?>">
  <?= $v->section("styles"); ?>
  <link rel="stylesheet" href="<?= asset("style.min.css"); ?>" />
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css" />
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                início
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                produtos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                categorias
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                usuários
              </a>
            </li>
            <li class="nav-item mt-5">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                usuários
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
          <h2>Dashboard</h2>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button class="btn btn-sm btn-outline-dark">Share</button>
              <button class="btn btn-sm btn-outline-dark">Export</button>
            </div>
            <button class="btn btn-sm btn-outline-dark dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>
      </main>
    </div>
  </div>

  <?= $v->section("content"); ?>

  <script src="<?= package("jquery/dist/jquery.min.js"); ?>"></script>
  <script src="<?= package("bootstrap/dist/js/bootstrap.bundle.min.js"); ?>"></script>
  <script src="<?= package("jquery-mask-plugin/dist/jquery.mask.min.js"); ?>"></script>
  <script src="<?= package("izitoast/dist/js/iziToast.min.js"); ?>"></script>
  <script src="<?= package("sweetalert2/dist/sweetalert2.min.js"); ?>"></script>
  <script src="<?= asset("scripts.min.js"); ?>"></script>
  <?= $v->section("scripts"); ?>

</body>

</html>

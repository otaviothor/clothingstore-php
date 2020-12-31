<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#343a40">

  <title>
    <?= $title; ?>
  </title>
  <link rel="shortcut icon" href="<?= asset("icons/logo.svg", false); ?>" type="image/x-icon">

  <link rel="stylesheet" href="<?= package("bootstrap/dist/css/bootstrap.min.css"); ?>" />
  <link rel="stylesheet" href="<?= package("@fortawesome/fontawesome-free/css/all.min.css"); ?>" />
  <link rel="stylesheet" href="<?= asset("style.min.css"); ?>" />
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand link-highlight" href="<?= $router->route("web.index"); ?>">
        <i class="fas fa-tshirt"></i> wear.up
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMobile">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMobile">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="<?= $router->route("web.index"); ?>" class="nav-link d-none d-block d-md-none">home</a>
          </li>
          <li class="nav-item">
            <a href="<?= $router->route(""); ?>" class="nav-link d-none d-block d-md-none">marcas</a>
          </li>
          <li class="nav-item">
            <a href="<?= $router->route(""); ?>" class="nav-link d-none d-block d-md-none">categorias</a>
          </li>
          <li class="nav-item">
            <a href="<?= $router->route("web.register"); ?>" class="nav-link d-none d-block d-md-none">cadastro</a>
          </li>
          <li class="nav-item">
            <a href="<?= $router->route("web.login"); ?>" class="nav-link d-none d-block d-md-none">login</a>
          </li>


          <li class="nav-item">
            <a href="<?= $router->route("web.index"); ?>" class="nav-link mr-3 d-none d-md-block">home</a>
          </li>
          <li class="nav-item">
            <a href="<?= $router->route(""); ?>" class="nav-link mr-3 d-none d-md-block">marcas</a>
          </li>
          <li class="nav-item">
            <a href="<?= $router->route(""); ?>" class="nav-link mr-3 d-none d-md-block">categorias</a>
          </li>
          <li class="nav-item">
            <a href="<?= $router->route("web.register"); ?>" class="btn btn-outline-light mr-3 d-none d-md-block">cadastro</a>
          </li>
          <li class="nav-item">
            <a href="<?= $router->route("web.login"); ?>" class="btn btn-light d-none d-md-block">login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?= $v->section("content"); ?>

  <footer class="bg-dark">
    <div class="container text-light">
      <div class="row py-4 d-flex align-items-center">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0"><i class="fas fa-tshirt"></i> wear.up | o e-commerce feito para quem quer se vestir bem</h6>
        </div>
        <div class="col-md-6 col-lg-7 text-center text-md-right">
          <a href="https://www.instagram.com/houpa.app" title="Instagram" target="blank" class="text-light">
            <i class="fab fa-instagram mr-4"></i>
          </a>
          <a href="https://www.facebook.com/houpaapp" title="Facebook" target="blank" class="text-light">
            <i class="fab fa-facebook mr-4"></i>
          </a>
          <a href="https://twitter.com/houpaapp" title="Twitter" target="blank" class="text-light">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?= package("jquery/dist/jquery.min.js"); ?>"></script>
  <script src="<?= package("axios/dist/axios.min.js"); ?>"></script>
  <script src="<?= package("bootstrap/dist/js/bootstrap.bundle.min.js"); ?>"></script>
  <script src="<?= package("jquery-mask-plugin/dist/jquery.mask.min.js"); ?>"></script>
  <script src="<?= asset("scripts.min.js"); ?>"></script>
  <?= $v->section("scripts"); ?>

</body>

</html>

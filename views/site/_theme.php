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
  <link rel="stylesheet" href="<?= package("izitoast/dist/css/iziToast.min.css"); ?>" />
  <link rel="stylesheet" href="<?= package("sweetalert2/dist/sweetalert2.min.css"); ?>" />
  <link rel="stylesheet" href="<?= package("animate.css/animate.min.css"); ?>">
  <link rel="stylesheet" href="<?= package("Croppr.js/dist/croppr.min.css"); ?>">
  <?= $v->section("styles"); ?>
  <link rel="stylesheet" href="<?= asset("style.min.css"); ?>" />
</head>

<body>

  <div id="loading">
    <div id="spinner"></div>
  </div>

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

          <!-- link mobile -->
          <li class="nav-item d-none d-block d-md-none">
            <a href="<?= $router->route("web.index"); ?>" class="nav-link">home</a>
          </li>

          <!-- link desktop -->
          <li class="nav-item d-none d-md-block">
            <a href="<?= $router->route("web.index"); ?>" class="nav-link mr-3">home</a>
          </li>

          <!-- dropdown desktop and mobile -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
              categorias
            </a>
            <div class="dropdown-menu">
              <?php
                $categories = Src\Support\Session::get("categories");
                if ($categories) :
                  foreach ($categories as $category) :
                  ?>
                    <a class="dropdown-item" href="<?= $router->route("category.show", ["id" => $category->id]) ?>"><?= $category->category ?></a>
                  <?php
                  endforeach;
                else :
                  ?>
                    <span class="dropdown-item">nenhuma categoria encontrada</span>
                  <?php
                endif;
              ?>
            </div>
          </li>

          <!-- link mobile -->
          <li class="nav-item d-none d-block d-md-none">
            <a href="<?= $router->route("brand.index"); ?>" class="nav-link">marcas</a>
          </li>

          <!-- link desktop -->
          <li class="nav-item d-none d-md-block">
            <a href="<?= $router->route("brand.index"); ?>" class="nav-link mr-3">marcas</a>
          </li>

          <?php if(Src\Support\Session::get("user")) : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                conta
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= $router->route("profile.index") ?>"><i class="far fa-user-circle mr-1"></i> minha conta</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= $router->route("auth.logout") ?>"><i class="fas fa-power-off mr-1"></i> sair</a>
              </div>
            </li>
          <?php else : ?>
            <li class="nav-item d-none d-block d-md-none">
              <a href="<?= $router->route("web.register"); ?>" class="nav-link">cadastro</a>
            </li>
            <li class="nav-item d-none d-block d-md-none">
              <a href="<?= $router->route("web.login"); ?>" class="nav-link" >login</a>
            </li>

            <li class="nav-item d-none d-md-block">
              <a href="<?= $router->route("web.register"); ?>" class="btn btn-outline-light mr-3">cadastro</a>
            </li>
            <li class="nav-item d-none d-md-block">
              <a href="<?= $router->route("web.login"); ?>" class="btn btn-light">login</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <?= $v->section("content"); ?>

  <footer class="bg-dark">
    <div class="container text-light">
      <div class="row py-4 d-flex align-items-center">
        <div class="col-lg-6 col-md-8 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0"><i class="fas fa-tshirt"></i> wear.up | o e-commerce feito para quem quer se vestir bem</h6>
        </div>
        <div class="col-lg-6 col-md-4 text-center text-md-right">
          <a href="https://www.instagram.com/otaviothor_" title="Instagram" target="blank" class="text-light text-decoration-none">
            <i class="fab fa-instagram mr-4"></i>
          </a>
          <a href="https://www.facebook.com" title="Facebook" target="blank" class="text-light text-decoration-none">
            <i class="fab fa-facebook mr-4"></i>
          </a>
          <a href="https://twitter.com/otaviothor_" title="Twitter" target="blank" class="text-light text-decoration-none">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?= package("jquery/dist/jquery.min.js"); ?>"></script>
  <script src="<?= package("bootstrap/dist/js/bootstrap.bundle.min.js"); ?>"></script>
  <script src="<?= package("jquery-mask-plugin/dist/jquery.mask.min.js"); ?>"></script>
  <script src="<?= package("izitoast/dist/js/iziToast.min.js"); ?>"></script>
  <script src="<?= package("sweetalert2/dist/sweetalert2.min.js"); ?>"></script>
  <script src="<?= package("Croppr.js/dist/croppr.min.js"); ?>"></script>
  <script src="<?= asset("scripts.min.js"); ?>"></script>
  <?= $v->section("scripts"); ?>

</body>

</html>

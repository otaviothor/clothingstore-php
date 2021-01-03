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
          <li class="nav-item d-none d-block d-md-none">
            <a href="<?= $router->route("web.index"); ?>" class="nav-link">home</a>
          </li>
          <li class="nav-item d-none d-block d-md-none">
            <a href="<?= $router->route(""); ?>" class="nav-link">marcas</a>
          </li>
          <li class="nav-item d-none d-block d-md-none">
            <a href="<?= $router->route(""); ?>" class="nav-link">categorias</a>
          </li>
          <!-- <li class="nav-item d-none d-block d-md-none">
            <a href="<?= $router->route("web.register"); ?>" class="nav-link">cadastro</a>
          </li>
          <li class="nav-item d-none d-block d-md-none">
            <span class="nav-link" style="cursor: pointer;" data-toggle="modal" data-target="#modal-login">login</span>
          </li> -->


          <li class="nav-item d-none d-md-block">
            <a href="<?= $router->route("web.index"); ?>" class="nav-link mr-3">home</a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a href="<?= $router->route(""); ?>" class="nav-link mr-3">marcas</a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a href="<?= $router->route(""); ?>" class="nav-link mr-3">categorias</a>
          </li>
          <!-- <li class="nav-item d-none d-md-block">
            <a href="<?= $router->route("web.register"); ?>" class="btn btn-outline-light mr-3">cadastro</a>
          </li>
          <li class="nav-item d-none d-md-block">
            <button class="btn btn-light" data-toggle="modal" data-target="#modal-login">login</button>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
              conta
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?= $router->route("profile.index") ?>"><i class="far fa-user-circle mr-1"></i> minha conta</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-1"></i> sair</a>
            </div>
          </li>
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
          <a href="https://www.instagram.com/houpa.app" title="Instagram" target="blank" class="text-light text-decoration-none">
            <i class="fab fa-instagram mr-4"></i>
          </a>
          <a href="https://www.facebook.com/houpaapp" title="Facebook" target="blank" class="text-light text-decoration-none">
            <i class="fab fa-facebook mr-4"></i>
          </a>
          <a href="https://twitter.com/houpaapp" title="Twitter" target="blank" class="text-light text-decoration-none">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <div class="modal fade" id="modal-login" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-login animate__animated animate__fadeIn">
            <h2 class="my-3">faça o logon</h2>
            <form>
              <div class="form-group ">
                <label for="email">e-mail ou nome de usuário <span class="text-danger">*</span></label>
                <input type="email" id="email" name="email" class="form-control">
              </div>
              <div class="form-group ">
                <label for="password">senha <span class="text-danger">*</span></label>
                <input type="password" id="password" name="password" class="form-control">
                <span class="float-right text-dark btn-show-password" style="margin-top: -15px;">
                  <i class="fa fa-fw fa-eye btn-show-password-icon"></i>
                </span>
                <p class="mt-1 text-right">
                  <a class=" btn-recover-password" href="">
                    esqueceu sua senha ?
                  </a>
                </p>
              </div>
              <button class="btn btn-outline-dark btn-block mt-4" type="submit">logar <i class="fas fa-check"></i></button>
              <p class="mt-3 text-center">
                não possui conta ?
                <a class="" href="<?= $router->route('web.register') ?>">
                  cadastre - se
                </a>
              </p>
            </form>
          </div>
          <div class="form-recover-password d-none animate__animated animate__fadeIn">
            <h2 class="mt-3">recuperar senha</h2>
            <p class="mb-3">esqueceu senha senha ? não se preocupe, informe seu e-mail de cadastro que enviaremos as instruções pra você</p>
            <form>
              <div class="form-group ">
                <label for="email_recover">e-mail de cadastro <span class="text-danger">*</span></label>
                <input type="email_recover" id="email_recover" name="email_recover" class="form-control">
                <p class="mt-1 text-right">
                  <a class="btn-recover-password" href="">
                    lembrei minha senha
                  </a>
                </p>
              </div>
              <button class="btn btn-outline-dark btn-block mt-4 mb-3 next-step" type="submit">enviar solicitação <i class="fas fa-check"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= package("jquery/dist/jquery.min.js"); ?>"></script>
  <script src="<?= package("axios/dist/axios.min.js"); ?>"></script>
  <script src="<?= package("bootstrap/dist/js/bootstrap.bundle.min.js"); ?>"></script>
  <script src="<?= package("jquery-mask-plugin/dist/jquery.mask.min.js"); ?>"></script>
  <script src="<?= package("izitoast/dist/js/iziToast.min.js"); ?>"></script>
  <script src="<?= package("sweetalert2/dist/sweetalert2.min.js"); ?>"></script>
  <script src="<?= asset("scripts.min.js"); ?>"></script>
  <?= $v->section("scripts"); ?>

</body>

</html>

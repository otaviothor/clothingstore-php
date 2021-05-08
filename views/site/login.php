<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>
    <?= $title; ?>
  </title>
  <link rel="shortcut icon" href="<?= asset("icons/logo.svg", false); ?>" type="image/x-icon">

  <link rel="stylesheet" href="<?= package("bootstrap/dist/css/bootstrap.min.css"); ?>" />
  <link rel="stylesheet" href="<?= package("@fortawesome/fontawesome-free/css/all.min.css"); ?>" />
  <link rel="stylesheet" href="<?= package("animate.css/animate.min.css"); ?>">
  <link rel="stylesheet" href="<?= package("izitoast/dist/css/iziToast.min.css"); ?>">
  <link rel="stylesheet" href="<?= asset("style.min.css"); ?>" />
</head>

<body class="login-bg">

  <div class="mt-3 ml-3" style="position: absolute;">
    <a class="text-decoration-none" href="<?= $router->route('web.index') ?>">
      <h2 class="text-light rounded-lg"><i class="fas fa-tshirt"></i> wear.up</h2>
    </a>
  </div>
  <div class="container">
    <div class="row d-flex justify-content-center box-form-login">
      <div class="col-lg-5 col-md-8 col-sm-12 bg-dark p-5 rounded-lg">
        <a class="text-light text-decoration-none" href="<?= $router->route('web.index') ?>">
          <i class="fas fa-chevron-left"></i> voltar
        </a>
        <div class="form-login animate__animated animate__fadeIn">
          <h2 class="my-3 text-light">faça o logon</h2>
          <form>
            <div class="form-group text-light">
              <label for="email">e-mail ou nome de usuário <span class="text-danger">*</span></label>
              <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group text-light">
              <label for="password">senha <span class="text-danger">*</span></label>
              <input type="password" id="password" name="password" class="form-control">
              <span class="float-right text-dark btn-show-password" style="margin-top: -15px;">
                <i class="fa fa-fw fa-eye btn-show-password-icon"></i>
              </span>
              <p class="mt-1 text-light text-right">
                <a class="text-light btn-recover-password" href="">
                  esqueceu sua senha ?
                </a>
              </p>
            </div>
            <button class="btn btn-outline-light btn-block mt-4 next-step" type="submit">logar</button>
            <p class="mt-3 text-light text-center">
              não possui conta ?
              <a class="text-light" href="<?= $router->route('web.register') ?>">
                cadastre - se
              </a>
            </p>
          </form>
        </div>
        <div class="form-recover-password d-none animate__animated animate__fadeIn">
          <h2 class="mt-3 text-light">recuperar senha</h2>
          <p class="text-light mb-3">esqueceu senha senha ? não se preocupe, informe seu e-mail de cadastro que enviaremos as instruções pra você</p>
          <form>
            <div class="form-group text-light">
              <label for="email_recover">e-mail de cadastro <span class="text-danger">*</span></label>
              <input type="email_recover" id="email_recover" name="email_recover" class="form-control">
              <p class="mt-1 text-light text-right">
                <a class="text-light btn-recover-password" href="">
                  lembrei minha senha
                </a>
              </p>
            </div>
            <button class="btn btn-outline-light btn-block mt-4 next-step" type="submit">enviar solicitação</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= package("jquery/dist/jquery.min.js"); ?>"></script>
  <script src="<?= package("bootstrap/dist/js/bootstrap.bundle.min.js"); ?>"></script>
  <script src="<?= package("jquery-mask-plugin/dist/jquery.mask.min.js"); ?>"></script>
  <script src="<?= package("izitoast/dist/js/iziToast.min.js"); ?>"></script>
  <script src="<?= asset("scripts.min.js"); ?>"></script>

</body>

</html>

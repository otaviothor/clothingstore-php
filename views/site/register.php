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

<body class="register-bg">
  <div id="loading">
    <div id="spinner"></div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="m-3 d-none d-md-block">
        <a class="text-decoration-none" href="<?= $router->route('web.index') ?>">
          <h2 class="text-light rounded-lg"><i class="fas fa-tshirt"></i> wear.up</h2>
        </a>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-8 col-12 bg-dark offset-lg-7 offset-md-6 offset-sm-4 p-5 box-form-register">
        <a class="text-light text-decoration-none" href="<?= $router->route('web.index') ?>">
          <i class="fas fa-chevron-left"></i> voltar
        </a>
        <h2 class="my-3 text-light">cadastre - se</h2>
        <form action="<?= $router->route("auth.register") ?>">
          <div class="step-1 d-block animate__animated animate__fadeIn">
            <div class="form-group text-light">
              <label for="name">nome completo <span class="text-danger">*</span></label>
              <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group text-light">
              <label for="email">e-mail <span class="text-danger">*</span></label>
              <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group text-light">
              <label for="password">senha <span class="text-danger">*</span></label>
              <input type="password" id="password" name="password" class="form-control">
              <span class="float-right text-dark btn-show-password" style="margin-top: -15px;">
                <i class="fa fa-fw fa-eye btn-show-password-icon"></i>
              </span>
            </div>
            <button class="btn btn-outline-light btn-block mt-4 next-step">próximo</button>
            <p class="mt-3 text-light text-right">
              já possui conta ?
              <a class="text-light" href="<?= $router->route('web.login') ?>">
                faça o login
              </a>
            </p>
          </div>
          <div class="step-2 d-none animate__animated animate__fadeIn">
            <div class="form-group text-light">
              qual atividade você irá realizar com sua conta ? <span class="text-danger">*</span>
            </div>
            <div class="form-check form-group text-light">
              <input class="form-check-input" type="radio" name="user_type" id="type1" value="3" checked>
              <label class="form-check-label" for="type1">
                comprar
              </label>
            </div>
            <div class="form-check form-group text-light">
              <input class="form-check-input" type="radio" name="user_type" id="type2" value="2">
              <label class="form-check-label" for="type2">
                vender
              </label>
            </div>
            <div class="d-flex">
              <button class="btn btn-light btn-block mt-4 mr-1 prev-step">anterior</button>
              <button class="btn btn-outline-light btn-block mt-4 ml-1 next-step">próximo</button>
            </div>
          </div>
          <div class="step-3 d-none animate__animated animate__fadeIn">
            <div class="form-group text-light cpf">
              <label for="cpf">cpf <span class="text-danger">*</span></label>
              <input type="text" id="cpf" name="cpf" class="form-control" data-mask="000.000.000-00">
            </div>
            <div class="form-group text-light cnpj">
              <label for="cnpj">cnpj <span class="text-danger">*</span></label>
              <input type="text" id="cnpj" name="cnpj" class="form-control" data-mask="00.000.000/0000-00">
            </div>
            <div class="d-flex">
              <button class="btn btn-light btn-block mt-4 mr-1 prev-step">anterior</button>
              <button class="btn btn-outline-light btn-block mt-4 ml-1" type="submit">finalizar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="<?= package("jquery/dist/jquery.min.js"); ?>"></script>
  <script src="<?= package("bootstrap/dist/js/bootstrap.bundle.min.js"); ?>"></script>
  <script src="<?= package("jquery-mask-plugin/dist/jquery.mask.min.js"); ?>"></script>
  <script src="<?= package("izitoast/dist/js/iziToast.min.js"); ?>"></script>
  <script src="<?= asset("scripts.min.js"); ?>"></script>
  <script>
    $("form").submit((e) => {
      e.preventDefault();
      if (!validateDocument()) {
        return false;
      }
      const form = $("form")

      $.ajax({
      	url: form.attr("action"),
      	data: form.serialize(),
      	type: "POST",
      	dataType: "json",
      	success: function(callback) {
      		if (callback.error) {
      			swal({
      				title: callback.message,
      				icon: "warning",
      				buttons: [false, "Ok"],
      			})
      		} else {
      			swal({
      					title: callback.message,
      					icon: "success",
      					buttons: [false, "Ok"],
      				})
      				.then(areClosed => {
      					if (areClosed) location.href = ''
      				});
      		}
      	},
      	error: function() {
      		swal({
      			title: "Erro na exclusão do produto!",
      			icon: "error",
      		});
      	}
      });
    });
  </script>

</body>

</html>

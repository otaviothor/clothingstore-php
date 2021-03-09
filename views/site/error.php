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
  <link rel="stylesheet" href="<?= asset("style.min.css"); ?>" />
</head>

<body>

  <div class="mt-3 ml-3" style="position: absolute;">
    <a class="text-decoration-none" href="<?= $router->route('web.index') ?>">
      <h2 class="text-dark rounded-lg"><i class="fas fa-tshirt"></i> wear.up</h2>
    </a>
  </div>
  <div class="container">
    <div class="row d-flex justify-content-center box-form-login">
      <?php
        $v->insert("components/error", ["message" => "a página que você pesquisou não está disponível"]);
      ?>
    </div>
  </div>

  <script src="<?= package("jquery/dist/jquery.min.js"); ?>"></script>
  <script src="<?= package("bootstrap/dist/js/bootstrap.bundle.min.js"); ?>"></script>
  <script src="<?= package("jquery-mask-plugin/dist/jquery.mask.min.js"); ?>"></script>
  <script src="<?= asset("scripts.min.js"); ?>"></script>

</body>

</html>

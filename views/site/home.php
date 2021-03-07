<?php $v->layout("_theme"); ?>

<div class="py-5 text-center text-white header-hero">
  <div class="py-5 my-5">
    <h1 class="display-4"><i class="fas fa-tshirt"></i> wear.up</h1>
    <p class="lead">o e-commerce feito para quem quer se vestir bem</p>
  </div>
</div>

<div class="container py-5">
  <h1 class="mb-2">marcas</h1>
  <div class="row">
    <?php for ($i=1; $i < 13; $i++) :?>
      <div class="col-md-2 col-sm-3 col-4 my-3">
        <a href="">
          <img class="rounded-circle img-fluid" width="100%" src="<?= asset("images/{$brands["image"]}") ?>" />
        </a>
        <h5 class="mt-2 text-center text-truncate"><?= $brands["full_name"] . " " . $i?></h5>
      </div>
    <?php endfor; ?>
  </div>
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <a class="text-dark my-3" href="">
        ver mais
      </a>
    </div>
  </div>

  <hr />

  <h1 class="mt-3 mb-2">produtos</h1>
  <div class="row">
    <?php for ($i=1; $i < 9; $i++) :?>
      <div class="col-sm-12 col-md-6 col-lg-3  my-3">
        <div class="card shadow">
          <img class="card-img-top" src="<?= asset("images/{$products["image"]}") ?>">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text text-muted">R$ <?= rand() ?></p>
            <a href="" class="btn btn-outline-dark px-3">Ver</a>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <a class="text-dark my-3" href="">
        ver mais
      </a>
    </div>
  </div>
</div>

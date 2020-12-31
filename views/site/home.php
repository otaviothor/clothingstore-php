<?php $v->layout("_theme"); ?>

<div class="py-5 mt-5 text-center text-white header-hero">
  <div class="py-5 my-5">
    <h1 class="display-4"><i class="fas fa-tshirt"></i> wear.up</h1>
    <p class="lead">o e-commerce feito para quem quer se vestir bem</p>
  </div>
</div>

<div class="container py-5">
  <h1 class="mb-2">marcas</h1>
  <div class="row">
    <div class="col-md-2 col-sm-3 col-4 my-3">
      <a href="">
        <img class="rounded-circle shadow-lg" width="100%" src="<?= asset("images/bg.jpg") ?>" />
      </a>
      <h5 class="mt-2 text-center text-truncate">Nome da marca</h5>
    </div>
  </div>

  <hr />

  <h1 class="mt-3 mb-2">produtos</h1>
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-3  my-3">
      <div class="card shadow">
        <img class="card-img-top" src="<?= asset("images/bg.jpg") ?>">
        <div class="card-body">
          <h5 class="card-title">Nome do produto</h5>
          <p class="card-text text-muted">R$ 123123</p>
          <a href="" class="btn btn-outline-dark px-3">Ver</a>
        </div>
      </div>
    </div>
  </div>
</div>

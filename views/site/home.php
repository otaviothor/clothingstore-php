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
    <?php for ($i=1; $i < 13; $i++) {
      $v->insert("components/card-brand", ["brand" => $brands]);
    } ?>
  </div>
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <a class="text-dark my-3" href="<?= $router->route("brand.index") ?>">
        ver mais
      </a>
    </div>
  </div>

  <hr />

  <h1 class="mt-3 mb-2">produtos</h1>
  <div class="row">
    <?php for ($i=1; $i < 9; $i++) {
      $v->insert("components/card-product", ["product" => $products]);
    } ?>
  </div>
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <a class="text-dark mt-3" href="<?= $router->route("product.index") ?>">
        ver mais
      </a>
    </div>
  </div>
</div>

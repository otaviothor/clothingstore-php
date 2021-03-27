<?php $v->layout("_theme"); ?>

<div class="py-5 text-center text-white header-hero">
  <div class="py-5 my-5">
    <h1 class="display-4"><i class="fas fa-tshirt"></i> wear.up</h1>
    <p class="lead">o e-commerce feito para quem quer se vestir bem</p>
  </div>
</div>

<div class="container py-5">
  <h1 class="mb-3">marcas</h1>
  <div class="row">
    <?php
    if (!empty($brands)) :
      foreach ($brands as $brand) :
        $v->insert("components/card-brand", ["brand" => $brand]);
      endforeach;
    else :
      $v->insert("components/404-not-found", ["message" => "nenhuma marca encontrada"]);
    endif;
    ?>
  </div>
  <?php if (!empty($brands)) : ?>
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <a class="text-dark mt-3" href="<?= $router->route("brand.index") ?>">
          ver mais
        </a>
      </div>
    </div>
  <?php endif; ?>

  <hr />

  <h1 class="my-3">produtos</h1>
  <div class="row">
    <?php
    if (! empty($products)) :
      foreach ($products as $product) :
        $v->insert("components/card-product", ["product" => $product]);
      endforeach;
    else :
      $v->insert("components/404-not-found", ["message" => "nenhum produto encontrado"]);
    endif;
    ?>
  </div>
  <?php if (! empty($products)) : ?>
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <a class="text-dark mt-3" href="<?= $router->route("product.index") ?>">
          ver mais
        </a>
      </div>
    </div>
  <?php endif; ?>
</div>

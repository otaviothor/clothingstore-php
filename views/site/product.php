<?php $v->layout("_theme"); ?>

<div class="container my-5">
  <div class="row ">
    <div class="col-md-7">
      <img class="img-fluid" src="<?= asset("images/product/{$product["image"]}") ?>" alt="<?= $product["name"]; ?>">
    </div>
    <div class="col-md-5">
      <span class="text-muted">
        <a href="<?= $router->route("category.show", ["id" => $product["category_id"]]) ?>" class="text-muted mr-1"><?= $product["category"]; ?></a> | <a href="<?= $router->route("brand.show", ["id" => $product["brand_id"]]) ?>" class="text-muted ml-1"><?= $product["brand"]; ?></a>
      </span>
      <h2><?= $product["name"]; ?></h2>
      <p>
        <?= $product["description"]; ?>
      </p>
      <h3 class="font-weight-bold">
        R$ <?= $product["price"]; ?>
      </h3>

      <!-- button buy -->
      <a href="#" class="btn btn-dark mt-5 btn-block">
        comprar
      </a>

      <!-- button manage -->
      <a href="" class="btn btn-dark mt-5 btn-block">
        editar
      </a>
      <a href="#" class="btn btn-outline-dark btn-block">
        excluir
      </a>
    </div>
  </div>
</div>


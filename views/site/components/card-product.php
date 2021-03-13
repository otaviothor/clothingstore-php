<div class="col-sm-12 col-md-6 col-lg-3  my-3">
  <div class="card shadow">
    <img class="card-img-top" src="<?= asset("images/product/{$product["image"]}") ?>">
    <div class="card-body">
      <h5 class="card-title"><?= $product["name"] ?></h5>
      <p class="card-text text-muted">R$ <?= $product["price"] ?></p>
      <a href="<?= $router->route("product.show", ["id" => $product["id"]]) ?>" class="btn btn-outline-dark px-3">ver</a>
    </div>
  </div>
</div>

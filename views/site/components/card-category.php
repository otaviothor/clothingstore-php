<div class="col-sm-12 col-md-4 col-lg-3 my-3">
  <div class="card">
    <div class="card-body d-flex justify-content-between">
      <h4 class="card-title"><?= $category["category"] ?></h4>
      <div>
        <a href="<?= $router->route("category.show", ["id" => $category["id"]]) ?>" class="text-dark mr-1"><i class="far fa-trash-alt"></i></a>
        <a href="<?= $router->route("category.show", ["id" => $category["id"]]) ?>" class="text-dark"><i class="far fa-edit"></i></i></a>
      </div>
    </div>
  </div>
</div>

<div class="col-md-2 col-sm-3 col-4 my-3">
  <a href="<?= $router->route("brand.show", ["id" => $brand["id"]]) ?>">
    <img class="rounded-circle img-fluid" width="100%" src="<?= asset("images/profile/{$brand["image"]}") ?>" />
  </a>
  <h5 class="mt-2 text-center text-truncate"><?= $brand["full_name"] ?></h5>
</div>

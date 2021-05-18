<div class="col-sm-6 col-md-4 col-lg-2 my-3">
  <a href="<?= $router->route("brand.show", ["id" => $brand->id]) ?>">
    <img class="rounded-circle img-fluid" width="100%" src="<?php echo $brand->image ? asset("images/profile/{$brand->image}", false) : asset('images/profile/avatar.svg', false) ?>" />
  </a>
  <h5 class="mt-2 text-center text-truncate"><?= $brand->name ?></h5>
</div>

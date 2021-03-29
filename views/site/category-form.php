<?php $v->layout("_theme"); ?>

<div class="container py-5">
  <h2><?= $titleForm; ?></h2>
  <div class="row">
    <div class="col-12 col-md-8 col-lg-6 mt-5">
      <form method="post" action="<?= $router->route("category.store") ?>">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="category">nome da categoria</label>
              <input type="text" id="category" name="category" class="form-control" placeholder="blusa">
            </div>
          </div>
        </div>

        <button class="btn btn-outline-dark btn-lg btn-block mb-5" type="submit"><?= $titleForm; ?></button>
      </form>
    </div>
  </div>

  <hr class="mb-4">

  <h2 class="mt-5 pb-5">categorias já cadastrados</h2>

  <div class="row">
    <?php
    use Src\Support\Session;
    $categories = Session::get("categories");
    if ($categories) :
      foreach ($categories as $category) :
        $v->insert("components/card-category", ["category" => $category]);
      endforeach;
    else :
      $v->insert("components/404-not-found", ["message" => "nenhuma categoria encontrada"]);
    endif;
    ?>
  </div>
</div>


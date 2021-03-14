<?php $v->layout("_theme"); ?>

<div class="container my-5">
  <div class="row">
    <div class="col-12 mb-3">
      <div class="card shadow">
        <div class="card-body">
          <div class="d-flex flex-row align-items-center ">
            <img src="<?= asset("images/{$brand["image"]}"); ?>" alt="<?= $brand["name"] ?>" class="rounded-circle" width="150">
            <div class="ml-5">
              <h4><?= $brand["name"] ?></h4>
              <p class="text-secondary mb-1"><?= $brand["email"] ?></p>
              <p class="text-muted font-size-sm">na wear.up desde <?= $brand["year"] ?></p>
              <!-- <button class="btn btn-dark">Follow</button>
              <button class="btn btn-outline-dark">Message</button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr />

  <h1 class="my-3">produtos da <?= $brand["name"] ?></h1>
  <div class="row">
    <?php
    if (!empty($products)) :
      foreach ($products as $product) :
        $v->insert("components/card-product", ["product" => $product]);
      endforeach;
    else :
      $v->insert("components/404-not-found", ["message" => "nenhum produto encontrado dessa marca"]);
    endif;
    ?>
  </div>
</div>

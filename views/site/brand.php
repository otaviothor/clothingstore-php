<?php $v->layout("_theme"); ?>

<div class="container my-5">
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card shadow">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center text-center">
            <img src="<?= asset("images/avatar.svg"); ?>" alt="Admin" class="rounded-circle" width="150">
            <div class="mt-3">
              <h4>loja do otávio</h4>
              <p class="text-secondary mb-1">lojadootavio@gmail.com</p>
              <p class="text-muted font-size-sm">na wear.up desde 2021</p>
              <!-- <button class="btn btn-dark">Follow</button>
              <button class="btn btn-outline-dark">Message</button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr />

  <h1 class="my-3">produtos da loja do otávio</h1>
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

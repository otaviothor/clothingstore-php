<?php $v->layout("_theme"); ?>

<div class="container my-5">
  <div class="row mb-3">
    <?php
    if (!empty($products)) :
      foreach ($products as $product) :
        $v->insert("components/card-product", ["product" => $product]);
      endforeach;
    else :
      $v->insert("components/empty", ["message" => "nenhuma marca encontrado"]);
    endif;
    ?>
  </div>
  <?php $v->insert("components/pagination", ["previous" => "", "next" => ""]); ?>
</div>


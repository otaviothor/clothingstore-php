<?php $v->layout("_theme"); ?>

<div class="container py-5">
  <h1 class="mb-3"><?= $title ?></h1>
  <div class="row">
    <?php
    if (empty($products)) :
      foreach ($products as $product) :
        $v->insert("components/card-product", ["product" => $product]);
      endforeach;
    else :
      $v->insert("components/empty", ["message" => "nenhum produto encontrado da categoria '{$title}'"]);
    endif;
    ?>
  </div>
  <?php $v->insert("components/pagination", ["previous" => "", "next" => ""]); ?>
</div>

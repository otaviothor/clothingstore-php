<?php $v->layout("_theme"); ?>

<div class="container my-5">
  <div class="row">
    <?php
    if (!empty($products)) :
      foreach ($products as $product) :
        $v->insert("components/card-product", ["product" => $product]);
      endforeach;
    else :
      $v->insert("components/404-not-found", ["message" => "nenhum produto encontrado"]);
    endif;
    ?>
  </div>
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link text-dark" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link text-dark" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link text-dark" href="#">3</a>
    </li>
  </ul>
</div>


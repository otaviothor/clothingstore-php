<?php $v->layout("_theme"); ?>

<div class="container py-5">
  <h2><?= $titleForm; ?></h2>
  <div class="row">
    <div class="col-12 col-md-8 col-lg-6 mt-5">
      <form method="post" action="">
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

  <h2 class="mt-5 mb-3">categorias já cadastrados</h2>

  <div class="row">
    <?php
    if (!empty($categories)) :
      foreach ($categories as $category) :
        $v->insert("components/card-category", ["category" => $category]);
      endforeach;
    else :
      $v->insert("components/404-not-found", ["message" => "nenhuma categoria encontrada"]);
    endif;
    ?>
  </div>
</div>

<?php
$v->start("scripts");
?>
<script>
	$("#name").on("keyup", () => {
		$(".card-title").html($("#name").val())
	})

	$("#price").on("keyup", () => {
		$(".card-price").html(`R$ ${$("#price").val()}`)
	})
</script>
<?php
$v->end();
?>

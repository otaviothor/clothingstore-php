<?php $v->layout("_theme"); ?>

<div class="container">
  <h2 class="mt-5"><?= $titleForm; ?></h2>
  <div class="row mt-5">
    <div class="col-md-4 order-md-2 mb-4">
      <div class="card shadow">
        <img class="card-img-top image-preview" src="https://via.placeholder.com/150x100" alt="">
        <div class="card-body">
          <h5 class="card-title">nome do produto</h5>
          <p class="card-text text-muted card-price">R$ 199,99</p>
          <a href="#" class="btn btn-outline-dark px-3">ver</a>
        </div>
      </div>
    </div>

    <div class="col-md-8 order-md-1 text-dark">
      <form method="post" action="">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="name">nome completo</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="blusa nike sb">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 col-sm-12 mb-3">
            <div class="form-group">
              <label for="category">categoria</label>
              <select class="form-control" id="category" name="category_id">
                <?php
                  if (!empty($categories)) :
                    foreach ($categories as $category) :
                    ?>
                      <option value="<?= $category["id"] ?>"><?= $category["category"] ?></option>
                    <?php
                    endforeach;
                  else :
                    ?>
                      <option>nenhuma categoria encontrada</option>
                    <?php
                  endif;
                ?>
              </select>
            </div>
          </div>
          <div class="col-md-5 col-sm-12 mb-3">
            <div class="form-group">
              <label for="price">preço</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">R$</span>
                </div>
                <input type="text" class="form-control price" id="price" placeholder="199,99" name="price" data-mask="000.000,00" data-mask-reverse="true" />
              </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-12 mb-3">
            <div class="form-group">
              <label for="image">selecionar foto</label>
              <input type="file" class="form-control-file upload-image" id="image" name="image">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="description">descrição do produto</label>
              <textarea class="form-control" id="description" rows="5" name="description"></textarea>
            </div>
          </div>
        </div>

        <hr class="mb-4">
        <button class="btn btn-outline-dark btn-lg btn-block mb-5" type="submit"><?= $titleForm; ?></button>
      </form>
    </div>
  </div>
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

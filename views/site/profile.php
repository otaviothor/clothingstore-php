<?php $v->layout("_theme"); ?>

<div class="container">
  <div class="row d-flex justify-content-center my-5">
    <div class="col-lg-5 col-md-8 col-sm-12 bg-dark p-5 rounded-lg">
      <div class="form-login animate__animated animate__fadeIn">
        <form>
          <div class="row d-flex justify-content-center">
            <div class="col-8">
              <img src="<?= asset("images/avatar.svg") ?>" class="img-fluid image-preview" alt="Responsive image">
            </div>
          </div>
          <div class="form-group text-light">
            <div class="mt-3">
              <label for="photo">Selecionar foto</label>
              <input type="file" onchange="imagePreview(this)" class="form-control-file input-image" name="photo" id="photo">
            </div>
          </div>
          <div class="form-group text-light">
            <label for="full_name">nome completo</label>
            <input type="full_name" id="full_name" name="full_name" class="form-control">
          </div>
          <div class="form-group text-light">
            <label for="email">e-mail</label>
            <input type="email" id="email" name="email" class="form-control">
          </div>
          <div class="form-group text-light">
            <label for="document">cpf</label>
            <input class="form-control" type="text" id="document" placeholder="000.000.000-00" readonly>
          </div>
          <div class="form-group text-light">
            <label for="password">senha <span class="text-danger">*</span></label>
            <input type="password" id="password" name="password" class="form-control">
            <span class="float-right text-dark btn-show-password" style="margin-top: -15px;">
              <i class="fa fa-fw fa-eye btn-show-password-icon"></i>
            </span>
          </div>
          <button class="btn btn-outline-light btn-block mt-4 next-step" type="submit">atualizar dados <i class="fas fa-check"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $v->start("scripts"); ?>
<?php $v->end(); ?>

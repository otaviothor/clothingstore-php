<?php $v->layout("_theme"); ?>

<div class="container">
  <div class="row d-flex justify-content-center my-5">
    <div class="col-lg-5 col-md-8 col-sm-12 bg-dark p-5 rounded-lg text-light">
      <form action="<?= $router->route("profile.update"); ?>" method="post" enctype="multipart/form-data">
          <div class="row d-flex justify-content-center">
            <div class="col-8">
              <img src="<?php echo $user->image ? asset("images/profile/{$user->image}", false) : asset('images/profile/avatar.svg', false) ?>" class="img-fluid image-view" alt="<?= $user->name ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="mt-3">
              <label for="image">selecionar foto</label>
              <input type="file" class="form-control-file upload-image" id="image" name="image">
            </div>
          </div>
          <div class="form-group">
            <label for="name">nome completo</label>
            <input type="name" id="name" name="name" class="form-control" value="<?= $user->name ?>">
          </div>
          <div class="form-group">
            <label for="email">e-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="<?= $user->email ?>">
          </div>
          <div class="form-group">
            <?php if($user->user_type === "2") : ?>
              <label for="document">cnpj</label>
              <input class="form-control" type="text" id="document" data-mask="00.000.000/0000-00" value="<?= $document[0]->cnpj ?>">
            <?php endif; if($user->user_type === "3") : ?>
              <label for="document">cpf</label>
              <input class="form-control" type="text" id="document" data-mask="000.000.000-00" value="<?= $document[0]->cpf ?>">
            <?php endif; ?>
            </div>
          <div class="form-group">
            <label for="password">senha</label>
            <input type="password" id="password" name="password" class="form-control">
            <span class="float-right text-dark btn-show-password" style="margin-top: -15px;">
              <i class="fa fa-fw fa-eye btn-show-password-icon"></i>
            </span>
          </div>
          <button class="btn btn-outline-light btn-block mt-4" type="submit">atualizar dados</button>
      </form>
    </div>
  </div>
</div>


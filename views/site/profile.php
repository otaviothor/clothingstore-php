<?php $v->layout("_theme"); ?>

<div class="container">
  <div class="row d-flex justify-content-center my-5">
    <div class="col-lg-5 col-md-8 col-sm-12 bg-dark px-5 rounded-lg">
      <div class="form-login animate__animated animate__fadeIn">
        <h2 class="my-3 text-light">perfil</h2>
        <form>
          <div class="form-group text-light">
            <img src="<?= asset("images/bg10.jpg") ?>" class="img-fluid" alt="Responsive image">
            <div class="custom-file mt-3">
              <input type="file" class="custom-file-input" id="photo" lang="pt">
              <label class="custom-file-label" for="photo" data-browse="Selecionar foto">Selecionar foto</label>
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
          <button class="btn btn-outline-light btn-block mt-4 mb-5 next-step" type="submit">atualizar dados <i class="fas fa-check"></i></button>
        </form>
      </div>
      <div class="form-recover-password d-none animate__animated animate__fadeIn">
        <h2 class="mt-3 text-light">recuperar senha</h2>
        <p class="text-light mb-3">esqueceu senha senha ? não se preocupe, informe seu e-mail de cadastro que enviaremos as instruções pra você</p>
        <form>
          <div class="form-group text-light">
            <label for="email_recover">e-mail de cadastro <span class="text-danger">*</span></label>
            <input type="email_recover" id="email_recover" name="email_recover" class="form-control">
            <p class="mt-1 text-light text-right">
              <a class="text-light btn-recover-password" href="">
                lembrei minha senha
              </a>
            </p>
          </div>
          <button class="btn btn-outline-light btn-block mt-4 next-step" type="submit">enviar solicitação <i class="fas fa-check"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>

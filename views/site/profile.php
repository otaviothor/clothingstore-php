<?php $v->layout("_theme"); ?>

<div class="container">
  <div class="row d-flex justify-content-center my-5">
    <div class="col-lg-5 col-md-8 col-sm-12 bg-dark p-5 rounded-lg text-light">
      <form>
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
          <button class="btn btn-outline-light btn-block mt-4 next-step" type="submit">atualizar dados</button>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-cropper">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <img src="" id="image-crop" alt="image-crop">
          </div>
        </div>
        <div class="text-right mt-3">
          <button class="btn btn-dark close-modal" data-dismiss="modal">cancelar</button>
          <button id="crop" class="btn btn-outline-dark ml-2">cortar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$v->start("scripts");
?>
<script>
  const modal = $('#modal-cropper');
  const image = document.getElementById('image-crop');
  let cropper;
  $(".upload-image").on("change", (e) => {
    const files = e.target.files;

    const done = (url) => {
      image.src = url;
      modal.modal('show');
    };

    if (files && files[0]) {
      const reader = new FileReader();
      reader.onload = (e) => {
        done(reader.result);
      };
      reader.readAsDataURL(files[0]);
    }
  });

  modal
    .on('shown.bs.modal', () => {
      cropper = new Croppr(image, {
        aspectRatio: 1 / 1,
        viewMode: 3,
        preview: '.image-preview-crop',
      });
    })
    .on('hidden.bs.modal', () => {
      cropper.destroy();
      cropper = null;
    });

  $('#crop').on('click', () => {
    canvas = cropper.getValue()
    console.log(canvas);
    // canvas = cropper.getCroppedCanvas({
    //   width: 281,
    //   height: 255,
    // });
    // canvas.toBlob((b) => {
    //   url = URL.createObjectURL(b);
    //   const reader = new FileReader();
    //   reader.readAsDataURL(b);
    //   reader.onloadend = () => {
    //     const base64 = reader.result;
    //     console.log(base64);
    //     $('.image-view').attr('src', base64);
    //     modal.modal('hide');
    //   };
    // });
  });

</script>
<?php
$v->end();
?>

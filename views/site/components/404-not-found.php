<div class="row d-flex justify-content-center">
  <div class="col-sm-10 col-md-6 col-lg-4 m-4 text-center">
    <img src="<?= asset("images/404.svg", false); ?>" width="100%" alt="">
    <?php if (!empty($message)) : ?>
      <h4 class="font-italic mt-3"><?= $message ?></h4>
    <?php endif; if (!empty($btnText) && !empty($btnLink)) : ?>
      <a href="<?= $btnLink ?>" class="btn btn-outline-dark btn-block mt-3"><?= $btnText ?></a>
    <?php endif; ?>
  </div>
</div>

<div class="row d-flex justify-content-center">
  <div class="col-sm-10 col-md-6 col-lg-4 m-4 text-center">
    <img src="<?= asset("images/404.svg"); ?>" width="100%" alt="">
    <?php if (!empty($message)) : ?>
      <h4 class="font-italic mt-3"><?= $message ?></h4>
    <?php endif; ?>
  </div>
</div>

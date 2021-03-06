<div class="row d-flex justify-content-center">
  <div class="col-sm-10 col-md-6 col-lg-4 m-4 text-center">
    <img src="<?= asset("images/empty.svg", false); ?>" width="100%" alt="">
    <?php if (!empty($message)) : ?>
      <h4 class="font-italic mt-3"><?= $message ?></h4>
    <?php endif; if (!empty($label) && !empty($redirect)) : ?>
      <a href="<?= $redirect ?>" class="btn btn-outline-dark btn-block mt-3"><?= $label ?></a>
    <?php endif; ?>
  </div>
</div>

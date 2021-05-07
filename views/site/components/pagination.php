<div class="row d-flex justify-content-center">
  <?php if (!empty($previous)) : ?>
    <a class="text-dark" href="<?= $previous; ?>">
      anterior
    </a>
  <?php else : ?>
    <span class="text-dark text-muted">
      anterior
    </span>
  <?php endif; ?>
  <?php if (!empty($next)) : ?>
    <a class="text-dark ml-5" href="<?= $next; ?>">
      próximo
    </a>
  <?php else : ?>
    <span class="text-dark text-muted ml-5">
      próximo
    </span>
  <?php endif; ?>
</div>

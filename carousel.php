<?php if ($images): ?>
<?php $images = array_values($images); ?>
<div id="carousel" class="carousel slide carousel-fade border-bottom" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php foreach ($images as $i => $image): ?>
    <li data-target="#carousel" data-slide-to="<?= $i; ?>" class="<?= 0 === $i ? 'active' : ""; ?>"></li>
    <?php endforeach; ?>
  </ol>
  <div class="carousel-inner">
    <?php foreach ($images as $i => $image): ?>
    <div class="carousel-item<?= 0 === $i ? ' active' : ""; ?>">
      <img src="<?= $image; ?>" class="d-block w-100" alt="<?= basename($image); ?>">
      <div class="container d-none d-md-block">
        <div class="carousel-caption">
          <?= $captions[$i] ?? ""; ?>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"><?= i('Previous'); ?></span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"><?= i('Next'); ?></span>
  </a>
</div>
<?php endif; ?>

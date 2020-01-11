<?= self::before(); ?>
<?= self::carousel([
    'captions' => (array) $page->imagesCaption,
    'images' => (array) $page->images
]); ?>

<?php

$title = $page->title;
$description = $page->description;

?>
<?php if ($title || $description): ?>
<div class="container pt-5 pb-5">
  <div class="row">
    <div class="col-lg-9">
      <?php if ($title): ?>
      <h1 class="mb-5">
        <?= $title; ?>
      </h1>
      <?php endif; ?>
      <?php if ($description): ?>
      <div class="lead mb-n2">
        <?= $description; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if (!empty($state->x->tag) && $site->has('parent')): ?>
<?= self::tags(); ?>
<?php endif; ?>

<?php if ($pages->count): ?>
<div class="container pt-2 pb-5 my-3 overflow-hidden">
  <div class="row m-n5">
    <?php foreach ($pages as $page): ?>
    <div class="col-md-6 col-lg-4 p-5 align-self-stretch">
      <div class="d-flex flex-column h-100">
        <?php if ($image = $page->image(246, 185)): ?>
        <a href="<?= $page->url; ?>">
          <img src="<?= $image; ?>" class="mb-4 rounded img-fluid" alt="<?= basename($image); ?>">
        </a>
        <?php endif; ?>
        <h5 class="mb-3"><?= $page->title; ?></h5>
        <?= $page->excerpt ?? $page->description; ?>
        <p><small><?= $page->time->{r('-', '_', $site->language)}; ?></small></p>
        <div class="d-flex mt-auto pt-2">
          <a href="<?= $page->url; ?>" class="btn btn-outline-dark btn-sm">
            <?= i('More'); ?>
          </a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
<?= self::pager(); ?>
<?php endif; ?>

<?= self::after(); ?>

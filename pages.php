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
<?php foreach ($pages as $page): ?>
<hr class="m-0">
<div class="container my-5">
  <div class="row">
    <div class="col-lg-4 col-xl-3 pb-5">
      <h2 class="mb-3">
        <?= $page->title; ?>
      </h2>
      <?= $page->time->{r('-', '_', $site->language)}; ?>
      <?php if ($tags = $page->tags): ?>
      <br>
      <?= self::get('page.tags', ['tags' => $tags]); ?>
      <?php endif; ?>
    </div>
    <div class="col-lg-8 col-xl-6">
      <?php if ($image = $page->image(800, 600)): ?>
      <a href="<?= $page->url; ?>">
        <img alt="<?= w($page->title); ?>" class="img-fluid rounded" src="<?= $image; ?>">
      </a>
      <?php endif; ?>
      <div class="lead <?= $image ? 'my-4' : 'mb-4'; ?>">
        <?= $page->excerpt ?? $page->description; ?>
      </div>
      <a class="btn btn-outline-dark btn-sm" href="<?= $page->url; ?>">
        <?= i('More'); ?>
      </a>
    </div>
  </div>
</div>
<?php endforeach; ?>
<?= self::pager(); ?>
<?php endif; ?>

<?= self::after(); ?>

<?= self::before(); ?>
<?= self::carousel([
    'captions' => (array) $page->imagesCaption,
    'images' => (array) $page->images
]); ?>
<div class="overflow-hidden">
  <div class="container">
    <div class="row d-flex align-items-stretch pb-5">
      <div class="col-lg-4 col-xl-3 pt-5 mt-1">
        <?= $page->time->{r('-', '_', $site->language)}; ?>
        <?php if ($tags = $page->tags): ?>
        <br>
        <?= self::get('page.tags', ['tags' => $tags]); ?>
        <?php endif; ?>
      </div>
      <div class="col-lg-8 col-xl-6 pt-5">
        <h1 class="mb-5">
          <?= $page->title; ?>
        </h1>
        <div class="lead my-5">
          <?= $page->description; ?>
        </div>
        <?= $page->content; ?>
        <?php if (!empty($state->x->comment)): ?>
        <hr class="my-5">
        <?= self::comments(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?= self::after(); ?>

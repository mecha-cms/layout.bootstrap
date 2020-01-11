<?= self::before(); ?>
<?= self::carousel([
    'captions' => (array) $page->imagesCaption,
    'images' => (array) $page->images
]); ?>
<div class="overflow-hidden">
  <div class="container">
    <div class="row d-flex align-items-stretch">
      <div class="col-lg-9 col-xl-8 m-auto py-5">
        <h1 class="mb-3">
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

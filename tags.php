<div class="container pb-5">
  <div id="filters" class="d-flex mt-n5 pt-5">
    <div class="dropdown mr-2">
      <button class="btn btn-outline-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?= $site->is('tags') ? $tag->title : i('Show All'); ?>
      </button>
      <div class="dropdown-menu shadow-lg border-0 mt-2">
        <a class="dropdown-item<?= $site->is('tags') ? "" : ' active'; ?>" href="<?= $page->url; ?>">
          <?= i('Show All'); ?>
        </a>
        <?php foreach (Tags::from(LOT . DS . 'tag')->sort([1, 'title']) as $t): ?>
        <a class="dropdown-item<?= $t->path === $tag->path ? ' active' : ""; ?>" href="<?= $t->url; ?>" rel="tag">
          <?= $t->title; ?>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

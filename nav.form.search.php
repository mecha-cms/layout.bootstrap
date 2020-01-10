<?php if (!empty($state->x->search)): ?>
<form action="<?= $site->is('pages') ? $url->clean : dirname($url->clean); ?>" class="form-inline my-2" method="get">
  <input class="form-control" type="search" name="<?= $state->x->search->key; ?>" placeholder="<?= i('Search'); ?>" aria-label="<?= i('Search'); ?>">
</form>
<?php endif; ?>

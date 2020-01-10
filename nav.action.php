<?php if (is_file($file = LOT . DS . 'page' . DS . 'action.archive')): ?>
<?php $page = new Page($file); ?>
<a href="<?= $page->link; ?>" class="btn btn-primary my-2 mr-lg-3 d-block d-md-inline-block"><?= $page->title; ?></a>
<?php endif; ?>

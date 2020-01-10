<?php if (is_file($for)): ?>
<?php

$page = new Page($for);
$pages = Pages::from(Path::F($for))->sort([-1, 'time'])->chunk($page->chunk ?? 5, 0);
$has_pages = $pages->count > 0;

?>
<li class="nav-item<?= $has_pages ? ' dropdown' : ""; ?>">
  <?php if ($has_pages): ?>
  <a class="nav-link dropdown-toggle<?= $active ? ' active' : ""; ?>" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?= $page->title; ?>
  </a>
  <?php $test = $url->clean . '/'; ?>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item<?= 0 === strpos($test, $page->url . '/') ? ' active' : ""; ?>" href="<?= $page->url; ?>"><?= $page->title; ?></a>
    <div class="dropdown-divider"></div>
    <?php foreach ($pages as $p): ?>
    <a class="dropdown-item<?= 0 === strpos($test, $p->url . '/') ? ' active' : ""; ?>" href="<?= $p->url; ?>"><?= $p->title; ?></a>
    <?php endforeach; ?>
  </div>
  <?php else: ?>
  <a class="nav-link<?= $active ? ' active' : ""; ?>" href="<?= $page->url; ?>">
    <?= $page->title; ?>
  </a>
  <?php endif; ?>
</li>
<?php endif; ?>

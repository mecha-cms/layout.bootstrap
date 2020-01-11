<ul class="navbar-nav ml-auto mr-4 my-2">
  <?php foreach ($links as $link): ?>
  <?php

  $pages = Pages::from(Path::F($link->path))->sort([-1, 'time'])->chunk($link->chunk ?? 5, 0);
  $has_pages = $pages->count > 0;

  ?>
  <li class="nav-item<?= $has_pages ? ' dropdown' : ""; ?>">
    <?php if ($has_pages): ?>
    <a class="nav-link dropdown-toggle<?= $link->active ? ' active' : ""; ?>" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?= $link->title; ?>
    </a>
    <?php $test = $url->clean . '/'; ?>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item<?= 0 === strpos($test, $link->url . '/') ? ' active' : ""; ?>" href="<?= $link->url; ?>">
        <?= $link->title; ?>
      </a>
      <div class="dropdown-divider"></div>
      <?php foreach ($pages as $p): ?>
      <a class="dropdown-item<?= 0 === strpos($test, $p->url . '/') ? ' active' : ""; ?>" href="<?= $p->url; ?>"><?= $p->title; ?></a>
      <?php endforeach; ?>
    </div>
    <?php else: ?>
    <a class="nav-link<?= $link->active ? ' active' : ""; ?>" href="<?= $link->url; ?>">
      <?= $link->title; ?>
    </a>
    <?php endif; ?>
  </li>
  <?php endforeach; ?>
</ul>

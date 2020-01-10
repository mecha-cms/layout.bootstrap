<ul class="navbar-nav ml-auto mr-4 my-2">
  <?php foreach ($links as $link): ?>
  <?= self::get('nav.list-for', [
      'active' => $link->active,
      'for' => $link->path
  ]); ?>
  <?php endforeach; ?>
</ul>

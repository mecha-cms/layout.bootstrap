<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent px-0 py-2">
    <?php if ($site->is('home')): ?>
    <li class="breadcrumb-item active" aria-current="page">
      <?= i('Home'); ?>
    </li>
    <?php else: ?>
    <li class="breadcrumb-item">
      <a href="<?= $url; ?>">
        <?= i('Home'); ?>
      </a>
    </li>
    <?php endif; ?>
    <?php $i = count($traces); foreach ($traces as $k => $v): ?>
      <?php if ($k < $i - 1): ?>
      <li class="breadcrumb-item">
        <a href="<?= $v->url; ?>">
          <?= $v->title; ?>
        </a>
      </li>
      <?php else: ?>
      <li class="breadcrumb-item active" aria-current="page">
        <?= $v->title; ?>
      </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ol>
</nav>

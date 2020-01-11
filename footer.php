<div class="border-top py-2">
  <div class="container py-5">
    <?= $site->is('home') ? "" : self::trace(); ?>
    <nav class="d-flex flex-column nav mx-n3 my-4">
      <?php foreach ($links as $link): ?>
      <a class="nav-link<?= $link->active ? ' active' : ""; ?>" href="<?= $link->url; ?>">
        <?= $link->title; ?>
      </a>
      <?php endforeach; ?>
      <?php $path = $state->x->user->path ?? '#'; ?>
      <?php if (!empty($state->x->user->guard->path)): ?>
      <a class="nav-link disabled" title="<?= i('Log-in link has been disabled by the author.'); ?>">
        <?= i('Log In'); ?>
      </a>
      <?php else: ?>
        <?php if ($site->is('enter')): ?>
        <a class="nav-link" href="<?= $url . $path; ?>/<?= $user->name; ?>?exit=<?= $user->token; ?>">
          <?= i('Log Out'); ?>
        </a>
        <?php else: ?>
        <a class="nav-link" href="<?= $url . $path; ?>">
          <?= i('Log In'); ?>
        </a>
        <?php endif; ?>
      <?php endif; ?>
    </nav>
    <p class="mt-4">
      &#x00A9; <?= $time->year; ?> <a class="text-dark" href="<?= $url; ?>">
        <?= $site->title; ?>
      </a> &#x00B7; <?= i('Powered by %s', ['<a class="text-dark" href="https://mecha-cms.com" target="_blank">Mecha ' . VERSION . '</a>']); ?>
    </p>
  </div>
</div>

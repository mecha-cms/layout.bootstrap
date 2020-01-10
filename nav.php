<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container py-2">
    <a href="<?= $url; ?>" class="navbar-brand pr-2">
      <?= self::logo(); ?>
    </a>
    <button class="navbar-toggler border-0 mr-n2" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar" aria-expanded="false" aria-label="<?= i('Toggle navigation'); ?>">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <?= self::get('nav.list'); ?>
      <?= self::get('nav.action'); ?>
      <?= self::get('nav.form.search'); ?>
    </div>
  </div>
</nav>

<div class="container pb-4">
  <nav aria-label="<?= i('Page navigation'); ?>">
    <ul class="pagination">
      <li class="page-item<?= $pager->prev ? "" : ' disabled'; ?>">
        <a class="page-link" href="<?= $pager->prev; ?>" rel="prev">
          <?= i('Previous'); ?>
        </a>
      </li>
      <li class="page-item<?= $pager->next ? "" : ' disabled'; ?>">
        <a class="page-link" href="<?= $pager->next; ?>" rel="next">
          <?= i('Next'); ?>
        </a>
      </li>
    </ul>
  </nav>
</div>

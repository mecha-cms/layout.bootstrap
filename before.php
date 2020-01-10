<!DOCTYPE html>
<html lang="<?= $site->language; ?>" dir="<?= $site->direction; ?>" class>
  <head>
    <meta charset="<?= $site->charset; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if ($w = w($page->description ?? $site->description)): ?>
    <meta name="description" content="<?= $w; ?>">
    <?php endif; ?>
    <?php if ('archive' === $page->x): ?>
    <!-- Prevent search engines from indexing pages with `archive` state -->
    <meta name="robots" content="noindex">
    <?php endif; ?>
    <meta name="author" content="<?= $page->author; ?>">
    <title><?= w($t->reverse->join(' / ')); ?></title>
    <link href="<?= $url; ?>/favicon.ico" rel="shortcut icon">
    <link href="<?= $url->clean; ?>" rel="canonical">
  </head>
  <body>
    <?= self::header(); ?>

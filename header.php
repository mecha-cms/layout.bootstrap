<?= self::nav(); ?>
<?= self::carousel([
    'captions' => (array) $page->captions,
    'images' => (array) $page->images
]); ?>

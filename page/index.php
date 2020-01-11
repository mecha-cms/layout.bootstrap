<?php

$pages = Pages::from(LOT . DS . 'page');

State::set([
    'is' => [
        'page' => false,
        'pages' => true
    ]
]);

require __DIR__ . DS . '..' . DS . 'pages' . DS . 'portfolio.php';

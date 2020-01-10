<?php

Asset::set('css/bootstrap.min.css', 20);
Asset::set('js/jquery.min.js', 19.9);
Asset::set('js/bootstrap.min.js', 20);

// Wrap description data with paragraph tag(s) if needed
Hook::set('page.description', function($description) {
    if ($description && false === strpos($description, '</p>')) {
        return '<p>' . strtr(trim(n($description)), [
            "\n\n" => '</p><p>',
            "\n" => '<br>'
        ]) . '</p>';
    }
    return $description;
});

// Create site link data to be used in navigation
$GLOBALS['links'] = new Anemon((function($out, $state, $url) {
    $index = LOT . DS . 'page' . strtr($state->path, '/', DS) . '.page';
    foreach (g(LOT . DS . 'page', 'page') as $k => $v) {
        // Exclude home page
        if ($k === $index) {
            continue;
        }
        $v = new Page($k);
        // Add active state
        $v->set('active', 0 === strpos($url->path . '/', '/' . $v->name . '/'));
        $out[$k] = $v;
    }
    ksort($out);
    return $out;
})([], $state, $url));

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

// Tweak(s)
Hook::set('page.content', function($content) {
    if (!$content) {
        return $content;
    }
    $class_set = function($tag, $class, &$content) {
        if (false !== strpos($content, '</' . $tag . '>')) {
            if (false !== strpos($content, '<' . $tag . ' ')) {
                $content = preg_replace_callback('/<' . $tag . '(\s[^>]*)?>/', function($m) use($class, $tag) {
                    if (false !== strpos($m[1], ' class="')) {
                        $m[1] = str_replace(' class="', ' class="' . $class . ' ', $m[1]);
                    } else {
                        $m[1] .= ' class="' . $class . '"';
                    }
                    return '<' . $tag . $m[1] . '>';
                }, $content);
            }
            $content = str_replace('<' . $tag . '>', '<' . $tag . ' class="' . $class . '">', $content);
        }
    };
    $class_set('blockquote', 'blockquote', $content);
    $class_set('figure', 'figure', $content);
    $class_set('figcaption', 'figure-caption', $content);
    $class_set('table', 'table', $content);
    $content = str_replace('<details class="t-o-c ', '<details class="mb-5 t-o-c ', $content);
    return $content;
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

// Create site trace data to be used in navigation
$GLOBALS['traces'] = new Pages((function($out, $state, $url) {
    $chops = explode('/', trim($url->path, '/'));
    $v = LOT . DS . 'page';
    while ($chop = array_shift($chops)) {
        $v .= '/' . $chop;
        if ($file = File::exist([
            $v . '.page',
            $v . '.archive'
        ])) {
            $out[] = $file;
        }
    }
    return $out;
})([], $state, $url));

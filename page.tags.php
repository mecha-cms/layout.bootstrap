<?php

if (!empty($state->x->tag)) {
    $tags = $tags->map(function($tag) {
        if (is_string($tag)) {
            $tag = new Tag($tag);
        }
        return '<a class="font-weight-normal" href="' . $tag->url . '" rel="tag">' . $tag->title . '</a>';
    });
    echo $tags;
}

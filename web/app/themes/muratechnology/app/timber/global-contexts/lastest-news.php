<?php

return function ($context) {
    $posts = wp_get_recent_posts([
        'numberposts' => 10,
        'post_status' => 'publish',
    ]);

    $context['latest_news'] = [];

    foreach ($posts as $post) {
        $context['latest_news'][] = new Timber\Post($post['ID']);
    }

    return $context;
};
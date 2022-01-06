<?php

return function ($context) {
    $posts = wp_get_recent_posts([
        'post_type' => 'white-paper',
        'numberposts' => 10,
        'post_status' => 'publish',
    ]);

    $context['latest_white_papers'] = [];
    
    foreach ($posts as $post) {
        $context['latest_white_papers'][] = new Timber\Post($post['ID']);
    }

    return $context;
};
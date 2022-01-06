<?php

return function ($context) {
    $posts = wp_get_recent_posts([
        'post_type' => 'vacancy',
        'numberposts' => 10,
        'post_status' => 'publish',
    ]);

    $context['latest_vacancies'] = [];
    
    foreach ($posts as $post) {
        $context['latest_vacancies'][] = new Timber\Post($post['ID']);
    }

    return $context;
};
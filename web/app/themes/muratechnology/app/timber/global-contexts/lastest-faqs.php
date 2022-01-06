<?php

return function ($context) {
    $posts = wp_get_recent_posts([
        'post_type' => 'faq',
        // 'numberposts' => -1,
        'post_status' => 'publish',
    ]);

    $context['latest_faqs'] = [];
    
    foreach ($posts as $post) {
        $context['latest_faqs'][] = new Timber\Post($post['ID']);
    }

    return $context;
};
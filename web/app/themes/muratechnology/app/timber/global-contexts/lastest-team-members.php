<?php

return function ($context) {
    $posts = wp_get_recent_posts([
        'post_type' => 'team-member',
        'numberposts' => 10,
        'post_status' => 'publish',
    ]);

    $context['latest_team_members'] = [];
    
    foreach ($posts as $post) {
        $context['latest_team_members'][] = new Timber\Post($post['ID']);
    }

    return $context;
};
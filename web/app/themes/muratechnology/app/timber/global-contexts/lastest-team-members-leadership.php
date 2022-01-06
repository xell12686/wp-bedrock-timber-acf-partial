<?php

return function ($context) {
    $posts = wp_get_recent_posts([
        'post_type' => 'team-member',
        'numberposts' => 10,
        'post_status' => 'publish',
        'tax_query' => array(
            array(
                'taxonomy' => 'team_member_categories',
                'field' => 'slug',
                'terms' => 'leadership',
            )
        )
    ]);

    $context['latest_team_members_leadership'] = [];
    
    foreach ($posts as $post) {
        $context['latest_team_members_leadership'][] = new Timber\Post($post['ID']);
    }

    return $context;
};
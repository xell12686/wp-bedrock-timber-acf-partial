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
                'terms' => 'the-board',
            )
        )
    ]);

    $context['latest_team_members_board'] = [];
    
    foreach ($posts as $post) {
        $context['latest_team_members_board'][] = new Timber\Post($post['ID']);
    }

    return $context;
};
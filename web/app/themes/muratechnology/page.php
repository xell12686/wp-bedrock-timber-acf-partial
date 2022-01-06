<?php

$context = Timber::context();

$context['sections'] = get_field('sections');
// $context['temp_id'] = get_queried_object_id();
$context['post_parent_slug'] = get_post_field( 'post_name', wp_get_post_parent_id(get_queried_object_id()) );

Timber::render('page.twig', $context);

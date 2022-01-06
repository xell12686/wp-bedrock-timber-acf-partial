<?php

/**
* Template Name: Kitchen Sink
*
*/

$context = Timber::context();

$context['sections'] = get_field('sections');

Timber::render('kitchen-sink.twig', $context);


<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Sections
 */
$sections = new FieldsBuilder('sections', [
    'hide_on_screen' => [
        'the_content',
    ],
]);

$sections
    ->setLocation('post_type', '==', 'page')
    ->addFlexibleContent('sections')
        ->setLabel('')
        ->addLayout(require 'sections/about-slider.php')
        ->addLayout(require 'sections/cta-quote.php')
        ->addLayout(require 'sections/cta.php')
        ->addLayout(require 'sections/faq-short-listing.php')
        ->addLayout(require 'sections/featured-logos.php')
        ->addLayout(require 'sections/hero.php')
        ->addLayout(require 'sections/image-text.php')
        ->addLayout(require 'sections/news-carousel.php')
        ->addLayout(require 'sections/photo-grid.php')
        ->addLayout(require 'sections/process-steps.php')
        ->addLayout(require 'sections/stages.php')
        ->addLayout(require 'sections/stats-slider.php')
        ->addLayout(require 'sections/stats.php')
        ->addLayout(require 'sections/tabbed-content-dark.php')
        ->addLayout(require 'sections/tabbed-content.php')
        ->addLayout(require 'sections/tabbed-content-horizontal.php')
        ->addLayout(require 'sections/tabbed-multi-column.php')
        ->addLayout(require 'sections/team-grid.php')
        ->addLayout(require 'sections/text-multi-images.php')
        ->addLayout(require 'sections/timeline.php')
        ->addLayout(require 'sections/vacancy-listing.php')
        ->addLayout(require 'sections/vertical-slider.php')
        ->addLayout(require 'sections/white-paper-listing.php')
        ->addLayout(require 'sections/wysiwyg.php')
        ->addLayout(require 'sections/accordion.php')
        // ->addLayout(require 'sections/two-col-content.php')
        

    ;
return $sections;

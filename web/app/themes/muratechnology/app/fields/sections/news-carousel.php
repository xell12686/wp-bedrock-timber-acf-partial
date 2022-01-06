<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$newsCarousel = new FieldsBuilder('news_carousel');

$newsCarousel
    ->addText('title')
        ->setDefaultValue('News')
        ->setWidth('50')
        ->setRequired()
    ->addNumber('max_number_of_posts')
        ->setDefaultValue('6')
        ->setWidth('50')
        ->setRequired()
    ;

return $newsCarousel;

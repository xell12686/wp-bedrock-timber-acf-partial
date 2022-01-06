<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$section = new FieldsBuilder('faq_short_listing', ['title' => 'FAQs Short Listing'] );

$section
    ->addText('pre_title')
        ->setLabel('Optional small text above title')
        ->setWidth('30')
    ->addText('title')
        ->setDefaultValue('Frequently asked questions')
        ->setWidth('60')
        ->setRequired()
    ->addNumber('max_number_of_posts')
        ->setDefaultValue('8')
        ->setWidth('50')
        ->setRequired()        
    ;

return $section;

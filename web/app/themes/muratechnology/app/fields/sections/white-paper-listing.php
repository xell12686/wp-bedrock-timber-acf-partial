<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$whitePaperListing = new FieldsBuilder('white_paper_listing');

$whitePaperListing
    ->addText('pre_title')
        ->setDefaultValue('Download')
        ->setWidth('50')
        ->setRequired()
    ->addText('title')
        ->setDefaultValue('White papers')
        ->setWidth('50')
        ->setRequired()
    ->addNumber('max_number_of_posts')
        ->setDefaultValue('8')
        ->setWidth('50')
        ->setRequired()        
    ;

return $whitePaperListing;

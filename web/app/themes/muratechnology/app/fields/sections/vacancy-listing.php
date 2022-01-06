<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$vacancyListing = new FieldsBuilder('vacancy_listing');

$vacancyListing
    ->addText('pre_title')
        ->setDefaultValue('Career')
        ->setWidth('50')
        ->setRequired()
    ->addText('title')
        ->setDefaultValue('Vacancies')
        ->setWidth('50')
        ->setRequired()
    ;

return $vacancyListing;

<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$section = new FieldsBuilder('cta_quote', ['title' => 'CTA with Quote']);

$section
    ->addGroup('cta')
        ->setWidth('50')
        ->setLabel('CTA column')
        ->addText('title')
        ->addWysiwyg('copy')
        ->addText('button_label')
        ->addWysiwyg('copy_after_button')
        ->endGroup()
    ->addGroup('quote')
        ->setLabel('Quote column')
        ->setWidth('50')
        ->addTextarea('quote')
        ->addText('button_label')
        ->addTextarea('copy_after_button')
        ->endGroup()        
    ;

return $section;

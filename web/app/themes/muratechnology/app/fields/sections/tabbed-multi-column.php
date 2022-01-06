<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$tabbedMultiColumn = new FieldsBuilder('tabbed_multi_column');

$tabbedMultiColumn
    ->addText('pre_title')
        ->setDefaultValue('Technology')
        ->setWidth('30')
        ->setRequired()
    ->addText('top_cta_button_label')
        ->setLabel('Top CTA Button Label')
        ->setWidth('30')
    ->addText('top_cta_button_link')
        ->setLabel('Top CTA Button Link')
        ->setWidth('30')
    ->addRepeater('slides', [
            'layout' => 'block',
        ])
        ->setRequired()
        ->addText('nav_label')
            ->setWidth('20')
        ->addImage('logo')
            ->setWidth('30')
        ->addTextarea('copy')
            ->setWidth('50')
        ->addText('cta_button_label')
            ->setLabel('CTA Button Label')
            ->setWidth('30')
        ->addText('cta_button_link')
            ->setLabel('CTA Button Link')
            ->setWidth('20')
        ->addTextarea('quote')
            ->setWidth('50')
        ->addImage('avatar')
            ->setWidth('20')
        ->addText('name')
            ->setWidth('30')                              
        ->addText('position')
            ->setWidth('20')                              
        ->endRepeater()
    ;

return $tabbedMultiColumn;

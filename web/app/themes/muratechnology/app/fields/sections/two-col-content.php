<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$section = new FieldsBuilder('two_col_content', ['title' => 'Two Column Content']);

$section
    ->addText('pre_title')
        ->setDefaultValue('Technology')
        ->setWidth('30')
        ->setRequired()
    ->addText('top_cta_button_label')
        ->setWidth('30')
    ->addText('top_cta_button_link')
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
        ->addText('button_label')
            ->setWidth('30')
        ->addText('button_link')
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

return $section;

<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$stages = new FieldsBuilder('stages');

$stages
    ->addText('pre_title')
        ->setWidth('30')
        ->setLabel('Optional small text above title')
    ->addText('title')
        ->setWidth('30')
        ->setRequired()
    ->addTextarea('copy')
        ->setWidth('40')
    ->addText('button_label')
        ->setWidth('20')
        ->setLabel('CTA button label')
    ->addText('button_link')
        ->setWidth('30')
        ->setLabel('CTA button link')
    ->addSelect('button_color')
        ->setWidth('20')
        ->setDefaultValue('white')
        ->addChoice('transparent', 'Transparent')  
        ->addChoice('yellow', 'Yellow')  
        ->addChoice('white', 'White')          
    ->addRepeater('stages', [
            'button_label' => 'Add Stage'
        ])
        ->addText('value')
            ->setWidth('20')
            ->setRequired()            
        ->addText('label')
            ->setWidth('20')
            ->setRequired()            
        ->addWysiwyg('copy')
            ->setWidth('100')
            ->setRequired()            
        ->endRepeater()
    ;

return $stages;

<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$cta = new FieldsBuilder('cta', ['title' => 'CTA']);

$cta
    ->addImage('background')
        ->setWidth('20')
        ->setRequired()
    ->addColorPicker('bg_color')
        ->setLabel('Background Color')
        ->setInstructions('Background color for text column')
        ->setWidth('20')
        ->setDefaultValue('#F2E500')
    ->addTextArea('title')
        ->setWidth('45')
    ->addTextArea('copy')
        ->setWidth('30')
    ->addText('button_label')
        ->setWidth('20')
        ->setRequired()
    ->addText('button_link')
        ->setWidth('30')
        ->setRequired()
    ->addSelect('button_color')
        ->setWidth('20')
        ->setDefaultValue('transparent')
        ->addChoice('transparent', 'Transparent')  
        ->addChoice('yellow', 'Yellow')  
        ->addChoice('white', 'White')  
    ;

return $cta;

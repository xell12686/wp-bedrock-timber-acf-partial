<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$imageText = new FieldsBuilder('image_text');

$imageText
    ->addImage('image')
        ->setRequired()
        ->setWidth('30')
        ->setRequired()
    ->addNumber('image_width')
        ->setDefaultValue(100)
        ->setInstructions('image width in percent, if set to 100 image fills entire column and row (in mobile)')
        ->setWidth('20')
    ->addSelect('image_fit')
        ->setWidth('20')
        ->setDefaultValue('cover')
        ->addChoices( 'cover', 'contain' )       
    ->addColorPicker('bg_color')
        ->setLabel('Section Background Color')
        ->setWidth('20')
        ->setDefaultValue('#ffffff')
    ->addText('pre_title')
        ->setWidth('20')
        ->setLabel('Optional small text above title')
    ->addText('title')
        ->setWidth('30')
        ->setRequired()

    ->addWysiwyg('copy')
        ->setWidth('100')
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

        ->addTrueFalse('right_image')
        ->setWidth('20')
        ->setDefaultValue(0)
        ->setLabel('Image at right column')
    ;

return $imageText;

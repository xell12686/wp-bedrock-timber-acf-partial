<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$textMultiImages = new FieldsBuilder('text_multi_images');

$textMultiImages
    ->addText('title')
        ->setWidth('35')
        ->setRequired()
    ->addTextarea('copy')
        ->setWidth('50')        
    ->addTrueFalse('right_images')
        ->setWidth('15')
        ->setDefaultValue(1)
        ->setLabel('Images at right column')
    ->addText('button_label')
        ->setWidth('30')
        ->setLabel('CTA button label')
    ->addText('button_link')
        ->setWidth('30')
        ->setLabel('CTA button link')
    ->addRepeater('images')
        ->setRequired()
        ->addImage('image')
            ->setWidth('30')
        ->addText('link')
            ->setLabel('optional image link url')
            ->setWidth('50')
        ->addNumber('image_width')
            ->setDefaultValue(80)
            ->setInstructions('image width in percent')
            ->setWidth('15')            
        ->endRepeater()
    ;

return $textMultiImages;

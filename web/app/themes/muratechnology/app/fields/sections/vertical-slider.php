<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$section = new FieldsBuilder('vertical_slider');

$section
    ->addImage('background_layer')
        ->setWidth('50')
    ->addTrueFalse('progressive_background_color')
        ->setDefaultValue(0)
        ->setInstructions('background per slide lightens')
        ->setWidth('50')
    ->addRepeater('slides', [
            'button_label' => 'Add Slide',
            'layout' => 'block'
        ])
        ->addText('title')
            ->setWidth('40')
        ->addTextArea('copy')
            ->setWidth('60')
        ->addSelect('graphic_bundle')
            ->addChoices(
                'Upload Image', 'recycle', 'recycle-x', 'bottle-triangle', 'cup', 'coins'
            )
            ->setWidth('33.3')
            ->setRequired()
        ->addImage('front_image')
            ->conditional('graphic_bundle', '==', 'Upload Image')
            ->setInstructions('image to show on top of globe')
            ->setWidth('33.3')                        
            ->setRequired()
        ->addNumber('front_image_width')
            ->setDefaultValue(70)
            ->setInstructions('image width in percent')
            ->setWidth('33.3')

        ->addText('value')
            ->setWidth('40')
            ->setRequired()
        ->addSelect('value_length')
            ->setWidth('10')
            ->addChoices(
                'normal', 'long', 'very long'
            )            
            ->setDefaultValue('normal')            
        ->addText('label')
            ->setWidth('30')
            ->setRequired()            
        ->endRepeater()
    ;

return $section;

<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$photoGrid = new FieldsBuilder('photo_grid', ['title' => 'Photo Grid'] );

$photoGrid
    ->addRepeater('boxes', [
            'layout' => 'block',
            'button_label' => 'Add Box Item',
        ])
        ->setLabel('Grid Items')
        ->setRequired()
        ->addColorPicker('color')
            ->setWidth('20')
            ->setDefaultValue('#F8AB16')
            ->conditional('set_image', '!=', '1')
        ->addTrueFalse('set_image', [
                'allow_null' => 1
            ])
            ->setWidth('20')
            ->setInstructions('set Image background instead of plain color')
        ->addTrueFalse('wide_box')
            ->setWidth('20')
        ->addImage('image')
            ->conditional('set_image', '==', '1')
            ->setRequired()
            ->setWidth('20')
        ->addFile('video')            
            ->setWidth('20')
        ->addSelect('text_color')
            ->setWidth('20')
            ->setDefaultValue('black')
            ->addChoices( 'white', 'black' )

        ->addText('pre_title')
            ->setWidth('20')
        ->addText('label')
            ->setWidth('20')
        ->addText('copy')
            ->setWidth('60')
        ->endRepeater() 
    ;

return $photoGrid;

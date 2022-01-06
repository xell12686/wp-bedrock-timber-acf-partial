<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$section = new FieldsBuilder('tabbed_content_horizontal');

$section
    ->addText('pre_title')
        ->setDefaultValue('Technology')
        ->setWidth('30')
        ->setRequired()
    ->addTrueFalse('right_text')
        ->setWidth('15')
        ->setDefaultValue(0)
        ->setLabel('Text at right column')
    ->addTrueFalse('has_nav_bars')
        ->setWidth('15')
        ->setDefaultValue(1)
        ->setLabel('Has navigation bars')
    ->addTrueFalse('has_image_text_col')
        ->setWidth('20')
        ->setDefaultValue(0)
        ->setLabel('Has both image and text on slides')

    ->addRepeater('slides', [
            'layout' => 'block',
        ])
        ->setRequired()
        ->addImage('image')
            ->setWidth('30')
            ->setRequired()
        ->addText('title')
            ->setWidth('20')
        ->addText('label')
            ->setWidth('20')
            ->conditional('has_image_text_col', '==', '1')            
        ->addWysiwyg('copy')
            ->setWidth('70')
        ->addSelect('copy_font_size')
            ->setWidth('30')
            ->setDefaultValue('M')
            ->setInstructions('Set to smaller if content is too long compared to other panels')
            ->addChoices(
                'XL', 'L', 'M', 'S', 'SM'
            )            
        ->addNumber('image_width')
            ->conditional('has_image_text_col', '==', '1')   
            ->setDefaultValue(80)
            ->setInstructions('image width in percent')
            ->setWidth('40')
        ->addText('button_label')
            ->conditional('has_image_text_col', '==', '1')  
            ->setWidth('30')
        ->addText('button_link')
            ->conditional('has_image_text_col', '==', '1')  
            ->setWidth('30')
        ->endRepeater()
    ;

return $section;

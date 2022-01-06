<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$statsSlider = new FieldsBuilder('stats_slider');

$statsSlider
    ->addText('pre_title')
        ->setWidth('25')
    ->addText('title')
        ->setWidth('25')
        ->setRequired()
    ->addTextarea('copy')
        ->setRequired()
        ->setWidth('50')
    ->addRepeater('cta_buttons', [
            'button_label' => 'Add CTA button',
            'layout' => 'block'
        ])
        ->setLabel('CTA Buttons')
        ->addText('label')
            ->setWidth('40')
        ->addText('link')
            ->setWidth('45')
        ->addTrueFalse('open_in_new_window')
            ->setLabel('Open in new window')
            ->setWidth('15')
        ->endRepeater()
    ->addRepeater('slides')
        ->setRequired()
        ->addImage('image')
            ->setWidth('15')
            ->setRequired()
        ->addSelect('heading_type')
            ->setWidth('20')
            ->setDefaultValue('text')
            ->addChoices( 'text', 'number' )            
        ->addText('title')
            ->conditional('heading_type', '==', 'text')
            ->setLabel('heading')
            ->setWidth('20')
        ->addText('value')
            ->setWidth('15')
            ->conditional('heading_type', '==', 'number')
        ->addText('value_unit')
            ->setInstructions('optional unit to show after number')
            ->setWidth('10')
            ->conditional('heading_type', '==', 'number')
        ->addTextarea('copy')
            ->setWidth('30')
        ->endRepeater()
    ;

return $statsSlider;

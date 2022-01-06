<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$stats = new FieldsBuilder('stats');

$stats
    ->addImage('image')
        ->setRequired()
        ->setWidth('50')
    ->addText('pre_title')
        ->setWidth('25')
    ->addText('title')
        ->setWidth('25')
        ->setRequired()
    ->addTextarea('copy')
        ->setWidth('25')
    ->addText('value')
        ->setWidth('15')
    ->addText('value_unit')
        ->setInstructions('optional unit to show after number')
        ->setWidth('10')
    ->addText('value_label')
        ->setInstructions('optional text to show below number')
        ->setWidth('30')
    ->addTrueFalse('reverse_count')
        ->setWidth('10')
    ->addTrueFalse('big_label')
        ->setWidth('20')
    ->addRepeater('cta_buttons', [
            'button_label' => 'Add CTA button'
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

    ;

return $stats;

<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$timeline = new FieldsBuilder('timeline');

$timeline
    ->addText('heading')
        ->setDefaultValue('Development Timeline')
        ->setWidth('50')
    ->addRepeater('entries', [
            'layout' => 'block',
            'button_label' => 'Add Entry'
        ])
        ->setRequired()
        ->addText('year')
            ->setWidth('50')
        ->addTextArea('label')
            ->setWidth('50')
        ->endRepeater()
    ;

return $timeline;

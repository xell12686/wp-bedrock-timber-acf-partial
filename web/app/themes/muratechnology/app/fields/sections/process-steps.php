<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$processSteps = new FieldsBuilder('process_steps');

$processSteps
    ->addText('heading')
        ->setDefaultValue('The Process')
        ->setWidth('50')
    ->addRepeater('steps', [
            'layout' => 'block',
            'button_label' => 'Add Step'
        ])
        ->setRequired()
        ->addText('number')
            ->setWidth('15')
        ->addImage('image')
            ->setWidth('20')
            ->setRequired()
        ->addText('label')
            ->setWidth('25')
        ->addTextarea('copy')
            ->setWidth('40')
        ->addNumber('image_width')
            ->setDefaultValue(40)
            ->setInstructions('image width in percent')
            ->setWidth('50') 
        ->endRepeater()
    ;

return $processSteps;

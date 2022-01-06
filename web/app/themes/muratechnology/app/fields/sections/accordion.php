<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$section = new FieldsBuilder('accordion');

$section
    ->addText('pre_title')
        ->setDefaultValue('Career')
        ->setWidth('50')
    ->addText('title')
        ->setDefaultValue('Vacancies')
        ->setWidth('50')
        ->setRequired()
    ->addRepeater('accordion_rows', [
            'layout' => 'block',
        ])
        ->setRequired()
        ->addText('label')
            ->setWidth('30')
        ->addWysiwyg('copy')
            ->setWidth('70')
        ->endRepeater()        
    ;

return $section;

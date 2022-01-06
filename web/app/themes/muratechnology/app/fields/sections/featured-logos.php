<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$featuredLogos = new FieldsBuilder('featured_logos');

$featuredLogos
    ->addRepeater('logos', [
            'button_label' => 'Add Logo',
        ])
        ->addImage('image')
            ->setWidth('50')
            ->setRequired()          
        ->addText('url')
            ->setWidth('50')
            ->setLabel('Clickable URL (optional)')
        ->endRepeater()
    ;

return $featuredLogos;

<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Promo
 */
$tabbedContentDark = new FieldsBuilder('tabbed_content_dark');

$tabbedContentDark
    ->addText('heading')
        ->setWidth('35')
    ->addText('list_heading')
        ->setWidth('35')
    ->addImage('background_layer')
        ->setWidth('30')        
    ->addRepeater('slides', [
        'layout' => 'block',
        ])
        ->setRequired()
        ->addImage('image')
            ->setWidth('40')
            ->setRequired()
        ->addNumber('image_width')
            ->setDefaultValue(80)
            ->setInstructions('image width in percent')
            ->setWidth('60')            
        ->addText('title')
            ->setWidth('40')
        ->addText('label')
            ->setWidth('30')
        ->addTextarea('copy')
            ->setWidth('30')
        ->endRepeater()
    ;

return $tabbedContentDark;

<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$aboutSlider = new FieldsBuilder('about_slider');

$aboutSlider
    ->addImage('background')
        ->setWidth('50')
        ->setRequired()

    ->addRepeater('slides')
        ->setRequired()
        ->addText('pre_title')
            ->setWidth('20')
        ->addText('title')
            ->setWidth('20')
        ->addTextarea('copy')
            ->setWidth('60')
        ->endRepeater()
    ;

return $aboutSlider;

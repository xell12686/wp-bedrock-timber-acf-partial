<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$hero = new FieldsBuilder('hero');

$hero
    ->addImage('background_image')
        ->setWidth('40')
        ->setRequired()
    ->addText('pre_title')
        ->setWidth('30')
    ->addText('title')
        ->setWidth('30')
    ->addTextarea('copy')
        ->setLabel('Hero Copy')
        ->setWidth('50')
    ->addTrueFalse('bottom_right_copy')
        ->setInstructions('Sets copy to display on bottom right of section')
        ->setDefaultValue('0')
        ->setWidth('30')
    ->addSelect('cta_type')
        ->conditional('bottom_right_copy', '==', '0')
        ->setLabel('CTA type')
        ->setDefaultValue('no-cta')
        ->addChoice('no-cta', 'None')
        ->addChoice('play-video', 'Play Video')

    ->addFile('video')
        ->conditional('cta_type', '==', 'play-video')
        ->setInstructions('Upload video file in mp4 format only')
        ->setWidth('50')
    ->addText('video_label')
        ->setLabel('Video play button text')
        ->conditional('cta_type', '==', 'play-video')
        ->setWidth('50')
        ->setRequired()
    ;

return $hero;

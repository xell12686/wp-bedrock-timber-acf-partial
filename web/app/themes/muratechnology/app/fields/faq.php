<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Fields
 */
$faq = new FieldsBuilder('faq', [
    'position' => 'acf_after_title',
    'hide_on_screen' => [ 'the_content',]
]);

$faq
    ->setLocation('post_type', '==', 'faq')
    ->addText('question')
        ->setWidth('50')
        ->setRequired()
    ->addWysiwyg('answer')
        ->setWidth('50')
        ->setRequired()
    ;

return $faq;

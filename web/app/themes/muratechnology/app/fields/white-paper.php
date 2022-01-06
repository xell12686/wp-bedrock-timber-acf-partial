<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Fields
 */
$whitePaper = new FieldsBuilder('white-paper', [
    'position' => 'acf_after_title',
    'hide_on_screen' => [ 'the_content',]
]);

$whitePaper
    ->setLocation('post_type', '==', 'white-paper')
    ->addText('subject_matter')
        ->setWidth('50')
        ->setRequired()
    ->addFile('pdf')
        ->setLabel('PDF file')
        ->setInstructions('Upload white paper file in pdf format')
        ->setWidth('50')
    ;

return $whitePaper;


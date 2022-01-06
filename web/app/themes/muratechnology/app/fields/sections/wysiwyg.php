<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$wysiwyg = new FieldsBuilder('wysiwyg', ['title' => 'WYSIWYG'] );

$wysiwyg
    ->addWysiwyg('wysiwyg')
        ->setRequired()
        ->setLabel('Generic text content')
    ;

return $wysiwyg;

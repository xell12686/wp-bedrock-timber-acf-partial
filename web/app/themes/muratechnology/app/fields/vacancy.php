<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Fields
 */
$vacancy = new FieldsBuilder('vacancy', ['position' => 'acf_after_title']);

$vacancy
    ->setLocation('post_type', '==', 'vacancy')
    ->addText('salary')
        ->setWidth('50')
        ->setRequired()
    ->addSelect('salary_rate')
        ->setWidth('50')
        ->addChoices(
            'per Annum', 'per Month', 'per Hour'
        )
        ->setDefaultValue('per Annum')
    ;

return $vacancy;

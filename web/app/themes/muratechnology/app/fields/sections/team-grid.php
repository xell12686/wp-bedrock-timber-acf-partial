<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Section 
 */
$teamGrid = new FieldsBuilder('team_grid', [
    'hide_on_screen' => [
        'the_content',
    ],
]);

$teamGrid
    ->addText('heading')
        ->setDefaultValue('An Experienced Team, Dedicated to a Plastic Neutral Future')
        ->setWidth('50')
    ;

return $teamGrid;

<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Fields
 */
$teamMember = new FieldsBuilder('team-member', [
    'position' => 'acf_after_title',
    'hide_on_screen' => [ 'the_content',]
]);

$teamMember
    ->setLocation('post_type', '==', 'team-member')
    ->addText('position')
        ->setWidth('50')
        ->setRequired()
    ->addWysiwyg('bio')
        ->setRequired()
    ->addPostObject('articles', [
            'post_type' => [ 'post' ],
            'multiple' => 1
        ])        
    ->addRepeater('videos')
        ->addImage('poster')
        ->addFile('video_file')
            ->setInstructions('Upload video file in mp4 format only')
        ->endRepeater()
    ->addText('linkedin')
        ->setWidth('50')
    ->addText('email')
        ->setWidth('50')

    ;

return $teamMember;

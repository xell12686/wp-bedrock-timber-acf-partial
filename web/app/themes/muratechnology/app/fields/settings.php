<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Fields
 */
$siteSettings = new FieldsBuilder('site_settings');

$siteSettings
    ->addTab('Social')
        ->addGroup('social_accounts')
            ->addText('facebook')
            ->addText('instagram')
            ->addText('twitter')
            ->addText('linkedin')
            ->endGroup()
    ->setLocation('options_page', '==', 'site-settings');

return $siteSettings;

<?php

/**
 * Moves Yoast SEO to the bottom
 */
add_filter('wpseo_metabox_prio', function () {
    return 'low';
});

/**
 * Adds global contexts to Timber
 */
add_filter('timber/context', function ($context) {
    foreach (glob(get_template_directory() . '/app/timber/global-contexts/*.php') as $file) {
        $callable = require_once $file;

        if (is_callable($callable)) {
            $context = $callable($context);
        }
    }

    return $context;
});

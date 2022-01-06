<?php

/**
 * Returns a URL path for items in the dist/ directory
 *
 * @param string $file The file path relative to the dist/ directory, e.g. css/main.css
 * @return string
 */
if (!function_exists('asset_path')) {
    function asset_path($file)
    {
        return get_template_directory_uri() . '/assets/dist/' . $file;
    }
}

/**
 * Asset
 *
 * @return string|bool
 */
if (!function_exists('asset')) {
    function asset($path)
    {
        $mix = json_decode(
            file_get_contents(get_template_directory() . '/assets/dist/mix-manifest.json'),
            true
        );

        $fullPath = '/' . $path;
        
        
        if (!array_key_exists($fullPath, $mix)) {
            return false;
        }
        
       
        // if asset is jpeg or png
        if( string_ends_with( $path, '.jpg') || string_ends_with( $path, '.png') ) {
            $path = $path;
        } else {
            $path = ltrim($mix[$fullPath], '/');
        }

        return asset_path($path);
    }
}

/**
 * The Navigation
 *
 * @return void
 */
if (!function_exists('the_navigation')) {
    function the_navigation($themeLocation, $options = [])
    {
        $defaults = [
            'container' => 'nav',
            'containerClass' => 'navigation',
            'containerId' => 'navigation',
            'navClass' => 'navigation__nav',
            'navItemClass' => 'navigation__nav-item',
            'navItemActiveClass' => 'navigation__nav-item--active',
            'navSubItemClass' => 'navigation-sub-navigation__nav-item',
            'navItemHasChildrenClass' => 'navigation__nav-item--has-sub-navigation',
            'navItemCallToActionClass' => 'navigation__nav-item--call-to-action',
            'navLinkClass' => 'navigation__nav-link',
            'navSubLinkClass' => 'navigation-sub-navigation__nav-link',
            'navSubClass' => 'navigation-sub-navigation',
        ];

        $options = array_merge($defaults, $options);

        wp_nav_menu([
            'theme_location' => $themeLocation,
            'container' => $options['container'],
            'container_class' => $options['containerClass'],
            'container_id' => $options['containerId'],
            'menu_class' => $options['navClass'],
            'walker' => new NavigationWalker($options),
        ]);
    }
}


// Internal helper functions

if (!function_exists('limit_words')) {
    function limit_words($text, $limit) {
        $words = explode(" ", $text);
        $count = count($words);
        if ($count > $limit) {
            return implode(" ",array_splice($words,0,$limit)) . '...';
        } else {
            return $text;
        }
    }
}

if (!function_exists('get_mock_data')) {
    function get_mock_data($jsonFileName) {
        $dataJSON = file_get_contents(get_template_directory() . '/data/' . $jsonFileName);
        $items  = json_decode($dataJSON);
        return $items;
    }
}

if (!function_exists('string_ends_with')) {
    function string_ends_with($haystack, $needle) {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }
        return (substr($haystack, -$length) === $needle);
    }
}
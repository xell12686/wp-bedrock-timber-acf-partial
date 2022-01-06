<?php

$timber = new Timber\Timber();

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    add_theme_support('soil', 'clean-up');
    add_theme_support('soil', 'disable-rest-api');
    add_theme_support('soil', 'disable-asset-versioning');
    add_theme_support('soil', 'disable-trackbacks');
    add_theme_support('soil', 'relative-urls');
    add_theme_support('title-tag');
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);
    add_theme_support('post-thumbnails');
    
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'wp_generator');

    $navigations = require_once 'config/navigations.php';

    if (!empty($navigations)) {
        register_nav_menus($navigations);
    }
});

/**
 * Custom Post Types
 */
add_action('init', function () {
    $postTypes = require 'config/post_types.php';

    if (!empty($postTypes)) {
        foreach ($postTypes as $name => $config) {
            register_post_type($name, $config);
        }
    }

    $taxonomies = require 'config/taxonomies.php';

    if (!empty($taxonomies)) {
        foreach ($taxonomies as $name => $config) {
            register_taxonomy($name, $config['post_types'], $config['settings']);
        }
    }
});

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style');

    wp_enqueue_style('main.css', asset('css/main.css'), false, null);
    wp_enqueue_script('main.js', asset('js/main.js'), '', null, true);

}, 20);

add_action('wp_footer', function () {
    wp_dequeue_script('wp-embed');
});

add_action('wp_footer', function () {
    wp_dequeue_script('wp-embed');
});

/**
 * Initialise Custom Fields
 */
add_action('acf/init', function () {
    if (function_exists('acf_add_options_sub_page')) {
        acf_add_options_sub_page([
            'page_title'  => 'Site Settings',
            'menu_title'  => 'Site Settings',
            'menu_slug' => 'site-settings',
            'parent_slug' => 'options-general.php',
            'capability' => 'edit_posts',
            'redirect' => false,
        ]);
    }

    array_map(
        function ($file) {
            $fields = require_once $file;

            if ($fields instanceof \StoutLogic\AcfBuilder\FieldsBuilder) {
                acf_add_local_field_group($fields->build());
            }
        },
        glob(get_template_directory() . '/app/fields/*.php')
    );
});

/**
 * Custom Twig functions
 */
add_filter('timber/twig', function ($twig) {
    $twig->addFunction(new Timber\Twig_Function('asset', 'asset'));

    return $twig;
});

/**
 * Change POSTS to NEWS in WP dashboard
 */
add_action( 'admin_menu', 'mura_change_post_menu_label' );
add_action( 'init', 'mura_change_post_object_label' );
function mura_change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Add News';
    $submenu['edit.php'][16][0] = 'News Tags';
    echo '';
}
function mura_change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News';
    $labels->add_new = 'Add News';
    $labels->add_new_item = 'Add News';
    $labels->edit_item = 'Edit News';
    $labels->new_item = 'News';
    $labels->view_item = 'View News';
    $labels->search_items = 'Search News';
    $labels->not_found = 'No News found';
    $labels->not_found_in_trash = 'No News found in Trash';

}   
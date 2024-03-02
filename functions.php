<?php

function theme_scripts_and_styles()
{
    wp_enqueue_script('idm-main-script', get_template_directory_uri() . '/dist/scripts/main.js', [], false, ['in_footer' => true]);
    // wp_enqueue_script('idm-tailwind-script', 'https://cdn.tailwindcss.com');

    wp_enqueue_style('idm-normalize', 'http://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
    wp_enqueue_style('idm-main-style', get_template_directory_uri() . '/dist/styles/main.css');
    wp_enqueue_style('header-style', get_template_directory_uri() . '/dist/styles/main-header-style.css');
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/dist/styles/footer-style.css');

    if (is_404()) {
        wp_enqueue_style('idm-404-style', get_template_directory_uri() . '/dist/styles/404-style.css');
    }

}

add_action('wp_enqueue_scripts','theme_scripts_and_styles');

function register_theme_menus()
{
    register_nav_menus([
            'primary' => 'Primary Menu',

            'footer' => 'Footer Menu',

            '404-menu' => '404 Menu'
    ]);
}

add_action('init', 'register_theme_menus');

function get_theme_menu($menu_name)
{
    // Get menu items as a flat array
    $locations = get_nav_menu_locations();
    // If menu doesn't exist, let's just return an empty array
    if (!isset($locations[$menu_name])) {
        return [];
    }
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);

    // Iterate through the menu items to append classes as a string and other attributes
    foreach ($menu_items as &$item) {
        // Convert classes array to a space-separated string
        $item->classes = !empty($item->classes) ? implode(' ', array_filter($item->classes)) : '';

        // Ensure other standard attributes are set
        $item->target = !empty($item->target) ? $item->target : '';
        $item->title = !empty($item->attr_title) ? $item->attr_title : ''; // Use attr_title for the HTML title attribute
        $item->xfn = !empty($item->xfn) ? $item->xfn : '';
    }
    unset($item); // Break the reference with the last item
    return $menu_items;
}

/**
 * Function to register custom post types
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @return void
 */
function register_custom_post_types()
{
    $arg = [
        'labels' => [
            'name' => 'Portfolio',
            'singular_name' => 'Portfolio',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'portfolio'],
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_position' => 5,
        // 'taxonomies' => ['portfolio-categories'], // Name of custom taxonomy. Only need if you have a custom taxonomy
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-portfolio',
    ];
    $post_type_name = 'portfolio';

    // Register Albums post type
    register_post_type($post_type_name, $arg);
}

add_action('init', 'register_custom_post_types');

//Enable thumbnail image!
add_theme_support('post-thumbnails');

//Enable excerpts!
add_post_type_support ('page','excerpt');



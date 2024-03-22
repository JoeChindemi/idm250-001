<!-- Functions -->

<?php
//Enqueue scripts and styles
function theme_scripts_and_styles()
{
    wp_enqueue_script('idm-main-script', get_template_directory_uri() . '/dist/scripts/main.js', [], false, ['in_footer' => true]);
    // wp_enqueue_script('idm-tailwind-script', 'https://cdn.tailwindcss.com');
    wp_enqueue_style('idm-normalize', 'http://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
    wp_enqueue_style('idm-main-style', get_template_directory_uri() . '/dist/styles/main.css');
    wp_enqueue_style('header-style', get_template_directory_uri() . '/dist/styles/main-header-style.css');
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/dist/styles/footer-style.css');
    wp_enqueue_style('card-overlay-style', get_template_directory_uri() . '/dist/styles/card-overlay-style.css');
    wp_enqueue_script('hamburger-menu', get_template_directory_uri() . '/dist/scripts/hamburger-menu.js', array(), false, true);

    if (is_front_page()) {
        wp_enqueue_style('idm-front-page-style', get_template_directory_uri() . '/dist/styles/front-page-style.css');
    }

    if (is_404()) {
        wp_enqueue_style('idm-404-style', get_template_directory_uri() . '/dist/styles/404-style.css');
    }

    if (is_page_template('templates/template-sidebar.php')) {
        wp_enqueue_style('template-sidebar-style', get_template_directory_uri() . '/dist/styles/template-sidebar-style.css');
    }

    if (is_page_template('templates/template-project-listing.php')) {
        wp_enqueue_style('template-listing-style', get_template_directory_uri() . '/dist/styles/template-listing-style.css');
    }

    if (is_page() && !is_page_template()) {
        wp_enqueue_style('default-page-style', get_template_directory_uri() . '/dist/styles/default-page-style.css');
    }
}
add_action('wp_enqueue_scripts','theme_scripts_and_styles');

//Theme menus
function register_theme_menus()
{
    register_nav_menus([
            'primary' => 'Primary Menu',

            'footer' => 'Footer Menu',

            '404-menu' => '404 Menu'
    ]);
}
add_action('init', 'register_theme_menus');

//Enqueue fonts
function theme_enqueue_fonts() {
    wp_enqueue_style('custom-google-fonts-hind', 'https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap', false);
    wp_enqueue_style('custom-google-fonts-fugaz','https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet', false);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_fonts');


//Get theme menu
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
        'taxonomies' => array('category', 'post_tag'), // Add this line
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


//Add sidebar widget
function add_widgets()
{
    register_sidebar([
        'name' => 'Main Sidebar',
        'id' => 'main_sidebar',
    ]);
}
add_action('widgets_init', 'add_widgets');

//Add custom favicon
function add_custom_favicon() {
    echo '<link rel="icon" href="' . get_stylesheet_directory_uri() . '/assets/images/headerlogo.svg" type="image/x-icon">';
}
add_action('wp_head', 'add_custom_favicon');

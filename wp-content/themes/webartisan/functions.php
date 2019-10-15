<?php
/* **
 * activate wordpress components
 */
add_theme_support('post-thumbnails');

/*
 * ## Excerpt
 */
add_post_type_support( 'tutoriel', 'excerpt' );
add_post_type_support( 'snippet', 'excerpt' );
add_post_type_support( 'metier-du-web', 'excerpt' );
add_post_type_support( 'emploi', 'excerpt' );


/* *
 * Menus
 */
/* **
 *  Register main menu
 */
register_nav_menu('main', 'Navigation principale du site');
register_nav_menu('footer', 'Navigation de fin de page');

/* **
 *  Get menu structure as array
 */
function dw_getMenu($location)
{
    $menu = [];
    $locations = get_nav_menu_locations();

    foreach (wp_get_nav_menu_items($locations[$location]) as $post) {
        $item = new stdClass();
        $item->url = $post->url;
        $item->label = $post->title;
        $item->children = [];

        if ($post->menu_item_parent) {
            $menu[$post->menu_item_parent]->children[$post->ID] = $item;
        } else {
            $menu[$post->ID] = $item;
        }
    }
    return $menu;
}

/* *
 * Register custom post type :
 *
 */

function dw_register_post_types()
{
    register_post_type('tutoriel', [
        'label' => 'Tutoriels',
        'labels' => [
            'singular_name' => 'Tutoriel',
            'add_new_item' => 'Ajouter un tutoriel'
        ],
        'public' => true,
        'description' => 'Ici sont repris tous les tutoriel',
        'menu_icon' => 'dashicons-welcome-learn-more',
        'menu_position' => 5,
        'has_archive' => true,

    ]);
    register_post_type('snippet', [
        'label' => 'Snippets',
        'labels' => [
            'singular_name' => 'Snippet',
            'add_new_item' => 'Ajouter un snippet'
        ],
        'public' => true,
        'description' => 'Ici sont repris tous les articles',
        'menu_icon' => 'dashicons-editor-code',
        'menu_position' => 5,
        'has_archive' => true,
    ]);
    register_post_type('metier-du-web', [
        'label' => 'Métiers du web',
        'labels' => [
            'singular_name' => 'Métier du web',
            'add_new_item' => 'Ajouter un métier du web'
        ],
        'public' => true,
        'description' => 'Ici sont repris tous les tutoriels',
        'menu_icon' => 'dashicons-hammer',
        'menu_position' => 5,
        'has_archive' => true,
    ]);
    register_post_type('emploi', [
        'label' => 'Emplois',
        'labels' => [
            'singular_name' => 'Emploi',
            'add_new_item' => 'Créer une nouvelle anonce d\'emploi'
        ],
        'public' => true,
        'description' => 'Ici sont repris tous les annonces d\'emploi',
        'menu_icon' => 'dashicons-megaphone',
        'menu_position' => 5,
        'has_archive' => true,
    ]);
    register_post_type('carousel', [
        'label' => 'Carousels',
        'labels' => [
            'singular_name' => 'Carousel',
            'add_new_item' => 'Ajouté un item au contenu du carousel'
        ],
        'public' => true,
        'description' => 'Ici vous pouvez décider du contenu du carousel',
        'menu_icon' => 'dashicons-slides',
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => [
            'title' => false
        ],
        'capabilities' => array(
            'create_posts' => 'do_not_allow', // false < WP 4.5, credit @Ewout
        ),
        'map_meta_cap' => true,
    ]);

}

add_action('init', 'dw_register_post_types');

/* *
 * Register pages
 */

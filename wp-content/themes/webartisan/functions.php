<?php
/* **
 * activate wordpress components
 */
add_theme_support('post-thumbnails');

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
//    register_post_type('twinning', [
//        'label' => 'Twinning',
//        'labels' => [
//            'singular_name' => 'twinning',
//            'add_new_item' => 'Add a post in twinning'
//        ],
//        'public' => true,
//        'description' => 'This is the section that explain the steps of the twinning process',
//        'menu_icon' => 'dashicons-admin-post',
//        'menu_position' => 5,
//        'has_archive' => true,
//    ]);

}

add_action('init', 'dw_register_post_types');

/* *
 * Register pages
 */

<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/style.css', array(), filemtime(get_stylesheet_directory() . '/css/style.css'));
}

/*HOOK FILTERS...................*/

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu',10,2);
function add_extra_item_to_nav_menu( $items, $args ) {
    
    if (!is_user_logged_in() && $args->menu == 690) {
        $items .= '<li><a href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '">Sign in  /  Register</a></li>';
    }
    return $items;
}
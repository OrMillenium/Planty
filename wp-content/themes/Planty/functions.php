<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style',get_template_directory_uri() . '/style.css');
}
    
    

/*HOOK FILTERS...................*/

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu',10,2);
function add_extra_item_to_nav_menu( $items, $args ) {
    
    if (!is_user_logged_in() && $args->menu == 690) {
        $items .= '<li><a href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '">Sign in  /  Register</a></li>';
    }
    return $items;
}


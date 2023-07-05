<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style',get_template_directory_uri() . '/style.css');
    

}
    
    

/*HOOK FILTERS...................*/


add_filter( 'wp_nav_menu_items', 'wpb_admin_menu', 10, 2 );
function wpb_admin_menu( $items, $args ) {

    // Vérifie si l'utilisateur est connecté, a la capacité de gérer les options et que le menu est situé dans l'emplacement "primary"
    if ( is_user_logged_in() && current_user_can( 'manage_options' ) && $args->theme_location == 'primary' ) {

        // Si toutes les conditions sont remplies, on ajoute un lien vers l'interface d'administration de WordPress à la fin de la liste de menu
        $items .= '<li><a href="' . admin_url() . '">Admin</a></li>';
    }

    // La fonction doit retourner le contenu des éléments du menu, donc on retourne la variable $items
    return $items;
}


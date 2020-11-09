<?php

//Enqueue styles
wp_enqueue_style( 'style', get_stylesheet_uri() );

//Enqueue scripts

//Adding different dashboard features
add_theme_support( 'post-thumbnails' );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer Settings'
    ));
}

//Removing dashboard features

add_action( 'admin_init', 'init_remove_support', 100 );

function init_remove_support() {
    remove_post_type_support('page', 'editor');
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page('edit.php');
}

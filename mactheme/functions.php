<?php

function mactheme_theme_support() {

add_theme_support('title_tag'); /* Dynamic titles */
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'mactheme_theme_support');




$version = wp_get_theme()-> get('Version');

/* Registering styles */
function mactheme_register_styles(){
    wp_enqueue_style('mactheme-styles', get_template_directory_uri() ."/style.css", array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'mactheme_register_styles');


/* Registering Menu */
function mactheme_menus() {
    $locations = array(
        'primary' => "Header menu",
        'footer' => "Footer contact"
    );
    register_nav_menus($locations);
}

add_action('init', 'mactheme_menus'); 




/* Registering scripts */
function mactheme_register_scripts(){
    wp_enqueue_script('mactheme-script-fontawesome', 'https://kit.fontawesome.com/8e89247916.js', array(), '6.1.2', true);
}

add_action( 'wp_enqueue_scripts', 'mactheme_register_scripts');

/* Dynamic titles */
add_theme_support('title_tag');



/* Custom image size */
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 150, 150, true);



/* Custom image size */
function my_sidebars() {
    register_sidebar( 
        array (
        'name' => 'Blog sidebar',
        'id' => "blog-sidebar",
        'before_title' => '<p>',
        'after_title' => '</p>'
        )
    );
}
add_action('widgets_init', 'my_sidebars');





/* AIRDROP CUSTOM POST TYPE */
function airdrop_post_type() {

    $args = array (
            'labels' => array(
                        'name' => 'Airdrops',
                        'singular_name' => 'Airdrop',
            ),
            'hierarchical' => false,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-database-view',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
            'rewrite' => array('slug' => 'airdrops')
    );

    register_post_type('airdrops', $args);

}
add_action('init', 'airdrop_post_type');




/* AIRDROP TAXONOMY */
function airdrops_taxonomy() {

    $args = array(
        'labels' => array(
            'name' => 'Industries',
            'singular_name' => 'Industry',
        ),
        'public' => true,
        'hierarchical' => true, 
    );

    register_taxonomy('industries', array('airdrops'), $args );
}
add_action('init', 'airdrops_taxonomy');


add_action('pre_get_posts', function($query) {
    if ( ! is_admin() && $query->is_main_query() ) {
    
        if ( is_archive() || is_category() ) {
            $query->set( 'post_type', 'airdrops' );
        }
    
    
    }
    });


?>





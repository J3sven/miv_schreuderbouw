<?php

// Register Custom Navigation Walker
require_once('/inc/wp_bootstrap_navwalker.php');
// Register Customizer
require_once('/inc/customizer.php');

// enable featured images
add_theme_support( 'post-thumbnails' );

//load scripts
function miv_scripts() {
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
    wp_enqueue_style( 'main-theme-style', get_stylesheet_uri());
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'miv_scripts' );

// Menus
function register_miv_menus() {

	register_nav_menus( array(

		'main_menu' => 'Main Menu'

	) );

}
add_action( 'init', 'register_miv_menus' );

function miv_sidebars_init() {

    register_sidebar( array(
        'name'          => 'Home iconen boven',
        'id'            => 'home_row_1',
        'before_widget' => '<div class="miv_widget miv_%1$s miv_column miv_hi col-md-2">',
        'after_widget'  => '</div>',
    ) );

    register_sidebar( array(
        'name'          => 'Home iconen onder',
        'id'            => 'home_row_2',
        'before_widget' => '<div class="miv_widget miv_%1$s miv_column miv_hi col-md-2">',
        'after_widget'  => '</div>',
    ) );

    register_sidebar( array(
        'name'          => 'Home footer logos',
        'id'            => 'home_footer_1',
        'before_widget' => '<div class="miv_widget miv_%1$s miv_footericon">',
        'after_widget'  => '</div>',
    ) );

    register_sidebar( array(
        'name'          => 'Home footer adres',
        'id'            => 'home_footer_2',
        'before_widget' => '<div class="miv_widget miv_%1$s"',
        'after_widget'  => '</div>',
    ) );

}
add_action( 'widgets_init', 'miv_sidebars_init' );

//change excerpt length to 20
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
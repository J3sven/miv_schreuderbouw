<?php

// Register Custom Navigation Walker
require_once('/inc/wp_bootstrap_navwalker.php');

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
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . 'js/bootstrap.min.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'miv_scripts' );

// Menus
function register_miv_menus() {

	register_nav_menus( array(

		'main_menu' => 'Main Menu'

	) );

}
add_action( 'init', 'register_miv_menus' );
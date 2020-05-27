<?php

function load_css() {
    wp_register_style('style', get_template_directory_uri() . '/public/css/style.css',
        array(), false, 'all');
    wp_enqueue_style('style');
}

add_action( 'wp_enqueue_scripts', 'load_css');


function load_js() {
    wp_register_script('index', get_template_directory_uri() . '/public/js/index.js',
        array(), false, 'all');
    wp_enqueue_script('index');   
}

add_action('wp_enqueue_scripts', 'load_js');


function jaramah_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 500,
    ) );
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

add_action( 'after_setup_theme', 'jaramah_theme_support' );


function register_custom_nav_menus() {
    register_nav_menus( array(
        'main-menu' => 'Main menu Location',
        'shop-menu' => 'Shop menu Location',
        ));
}
    
add_action( 'after_setup_theme', 'register_custom_nav_menus' );


// Remove wordpress version in meta generator tag
remove_action( 'wp_head', 'wp_generator' );


require 'inc/storefront-functions.php';

if ( storefront_is_woocommerce_activated() ) {
    require 'inc/storefront-functions.php';
	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

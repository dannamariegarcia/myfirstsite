<?php

define('ROOT', get_stylesheet_directory_uri());
define('CSS', ROOT . '/assets/css/');
define('JS', ROOT . '/assets/js/');

if (!function_exists('theme_setup')) :

    function theme_setup() {
    
        add_theme_support( 'post-thumbnails' );
        	
    }

endif; add_action( 'after_setup_theme', 'theme_setup' );

function theme_enqueue_dequeue_styles() {

    
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js', array(), false, true );
    
    wp_enqueue_style( 'style', ROOT . '/style.css');



} add_action( 'wp_enqueue_scripts', 'theme_enqueue_dequeue_styles' );
<?php

// import stylesheets
function genesis_files(){
    wp_enqueue_style('genesis_main_styles', get_stylesheet_uri());
}

//main menu
function wpb_desktop_new_menu() {
    register_nav_menu('my-desktop-menu',__( 'My Desktop Menu' ));
  }
  
// register a mobile menu
function wdm_register_mobile_menu() {
    add_theme_support( 'nav-menus' );
    register_nav_menus( array('mobile-menu' => __( 'Mobile Menu', 'wdm' )) );
}

// load the JS file
function wdm_mm_toggle_scripts() {
    wp_enqueue_script( 'wdm-mm-toggle', get_stylesheet_directory_uri() . '/js/mobile-menu-toggle.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'wdm_mm_toggle_scripts' );


  
add_action( 'init', 'wpb_desktop_new_menu' );

add_action('wp_enqueue_scripts', 'genesis_files');

add_action( 'init', 'wdm_register_mobile_menu' );

?>
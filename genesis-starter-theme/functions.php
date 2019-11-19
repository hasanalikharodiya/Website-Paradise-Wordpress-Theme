<?php

function genesis_files(){
    wp_enqueue_style('genesis_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'genesis_files');


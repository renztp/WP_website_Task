<?php

function wpb_adding_styles() {
    wp_register_style('my_stylesheet', plugins_url('my-stylesheet.css', 'bootstrap/css/bootstrap.css'));
    wp_enqueue_style('my_stylesheet');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_styles' );  
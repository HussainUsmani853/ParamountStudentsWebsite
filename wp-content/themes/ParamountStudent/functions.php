<?php
// Theme functions file
function paramountstudents_setup(){
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('home-featured', 600, 400, array('center', 'center'));
    add_theme_support('automatic-feed-links');
    register_nav_menus(array(
        'primary' => __('Priamary Meny', 'paramountstudents')
    ));
}
add_action('after_setup_theme', 'paramountstudents_setup');

function paramountstudents_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_register_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' );
    wp_enqueue_style('Font_Awesome');
    wp_enqueue_script('paramountstudents_index', get_template_directory_uri() . '/assets/js/index.js', array(), '20140520', true);
}
add_action('wp_enqueue_scripts', 'paramountstudents_scripts');
?>
<?php
//include file for widget category styling
require_once('widgets/class-wp-widget-categories.php');

//Theme Support
function ecommerce_theme_setup(){
    //allow logo
    add_theme_support('custom-logo');

    //nav menus
    register_nav_menus(array(
        'primary' => __('Primary')
    ));

    //allow post thumbnails
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','ecommerce_theme_setup');

//Widget Locations
function ecommerce_init_widgets($id){
    //register sidebar
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="callout">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    //register showcase
    register_sidebar(array(
        'name' => 'Showcase',
        'id' => 'showcase',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));

}

add_action('widgets_init', 'ecommerce_init_widgets');

//enable custom styling changes for widget categories file
function ecommerce_register_widgets(){
    register_widget('WP_Widget_Categories_Custom');
}

add_action('widgets_init', 'ecommerce_register_widgets');
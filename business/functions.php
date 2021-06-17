<?php
//bring in nav walker
require_once('wp_bootstrap_navwalker.php');

//Theme Support
function business_theme_setup(){
    //allow logo
    add_theme_support('custom-logo');

    //nav menus
    register_nav_menus(array(
        'primary' => __('Primary')
    ));

    //allow post thumbnails
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','business_theme_setup');

//Widgets
function business_widget_setup($id){

    //Content Region 1
    register_sidebar(array(
        'name'=>'Content Region 1',
        'id'=>'content_region_1',
        'before_widget'=>'<section class="content-region-1 pt50 pb40"><div class="container">',
        'after_widget'=>'</div></section>',
        'before_title'=>'<h1>',
        'after_title'=>'</h1>'
    ));

    //Content Region 2
    register_sidebar(array(
        'name'=>'Content Region 2',
        'id'=>'content_region_2',
        'before_widget'=>'<section class="content-region-2 pt40 pb40"><div class="container"><div class="row">',
        'after_widget'=>'</div></div></section>',
        'before_title'=>'<h1>',
        'after_title'=>'</h1>'
    ));

    //Footer 1
    register_sidebar(array(
        'name'=>'Footer 1',
        'id'=>'footer_1',
        'before_widget'=>'',
        'after_widget'=>'',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'
    ));

    //Footer 2
    register_sidebar(array(
        'name'=>'Footer 2',
        'id'=>'footer_2',
        'before_widget'=>'',
        'after_widget'=>'',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'
    ));

    //Footer 3
    register_sidebar(array(
        'name'=>'Footer 3',
        'id'=>'footer_3',
        'before_widget'=>'',
        'after_widget'=>'',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'
    ));

    //Sidebar
    register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar',
        'before_widget'=>'<div class="panel panel-default sidebarwidget">',
        'after_widget'=>'</div></div>',
        'before_title'=>'<div class="panel-heading"><h3 class="panel-title">',
        'after_title'=>'</h3></div><div class="panel-body">'
    ));

}

add_action('widgets_init', 'business_widget_setup');

//bring Customizer settings for Home Page
require get_template_directory() . '/inc/customizer.php';
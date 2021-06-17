<?php
//bring in nav walker
require_once('wp_bootstrap_navwalker.php');

//Theme Support
function cleancut_theme_setup(){

    //nav menus
    register_nav_menus(array(
        'primary' => __('Primary')
    ));

    //allow post thumbnails
    add_theme_support('post-thumbnails');

    // Post Format Support
	add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('after_setup_theme','cleancut_theme_setup');

//Widgets
function cleancut_widget_setup($id){

    //Sidebar
    register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar',
        'before_widget'=>'<div class="well animated fadeInRight sidebar-widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
    ));

    //nav on blog archive
    register_sidebar(array(
        'name'=>'Subnav',
        'id'=>'subnav',
        'before_widget'=>'<div class="sub-nav">',
        'after_widget'=>'</div>',
        'before_title'=>'<div class="hide">',
        'after_title'=>'</div>'
    ));

    //footer 
    register_sidebar(array(
        'name'=>'Bottom',
        'id'=>'bottom',
        'before_widget'=>'<div class="animated section-a fadeInUp"><div class="container>',
        'after_widget'=>'</div></div>',
        'before_title'=>'<div class="hide">',
        'after_title'=>'</div>'
    ));
}

add_action('widgets_init', 'cleancut_widget_setup');

//Get Top Parent Page Links
function get_top_parent(){
    global $post;
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

// Add Customizer Functionality
require get_template_directory(). '/inc/customizer.php';
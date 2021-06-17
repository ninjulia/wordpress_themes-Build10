<?php
//call in custom categories widget styling info
require_once('widgets/class-wp-widget-categories.php');


//Theme Support
function photo_theme_setup(){
  //nav menus
  register_nav_menus( array(
    'primary' => __('Primary Menu')
  ) );

  //Featured Image Support
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(900,600);

  //Post Format Support (gallery, link and aside native options)
  add_theme_support('post-formats', array('gallery'));
  };

  add_action( 'after_setup_theme', 'photo_theme_setup' );

//Widget Locations
function photo_init_widgets($id){
  //sidebar
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar'
  ));
}

add_action('widgets_init', 'photo_init_widgets');

//Register Widgets
function photo_register_widgets(){
    //creates custom categories widget type
    register_widget('WP_Widget_Categories_Custom');
}

add_action('widgets_init', 'photo_register_widgets');

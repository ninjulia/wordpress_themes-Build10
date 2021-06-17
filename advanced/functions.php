<?php
//Theme Support
function adv_theme_support(){
  //nav menus
  register_nav_menus( array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
  ) );

  //featured image support
  add_theme_support( 'post_thumbnails' );

  //post format support
  add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action( 'after_setup_theme', 'adv_theme_support' );

//Set Widget Locations
function adv_init_widgets($id){
  //sidebar
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="block side-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
  //Showcase
  register_sidebar(array(
    'name' => 'Showcase',
    'id' => 'showcase',
    'before_widget' => '<div class="showcase">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
  ));
  //Box 1
  register_sidebar(array(
    'name' => 'Box 1',
    'id' => 'box1',
    'before_widget' => '<div class="box box1">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
  //Box 2
  register_sidebar(array(
    'name' => 'Box 2',
    'id' => 'box2',
    'before_widget' => '<div class="box box2">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
  //Box 3
  register_sidebar(array(
    'name' => 'Box 3',
    'id' => 'box3',
    'before_widget' => '<div class="box box3">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
};

add_action( 'widgets_init', 'adv_init_widgets' );

//Excerpt Length
function adv_set_excerpt_length(){
  return 25;
}

add_filter('excerpt_length', 'adv_set_excerpt_length');

function get_top_parent(){
  global $post;
  if($post->post_parent){
    $ancestors = get_post_ancestors( $post->ID );
    return $ancestors[0];
  }

  return $post->ID;
};

function page_is_parent(){
  global $post;

  $pages = get_pages('child_of=' . $post->ID);
  return count($pages);
};

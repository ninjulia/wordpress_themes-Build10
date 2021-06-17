<?php

/** 
* Showcase_Widget
* Starter code pulled from https://codex.wordpress.org/Widgets_API
*/

class Showcase_Widget extends WP_Widget {

/**
 * Sets up the widgets name etc, modified from original
 */
public function __construct() {
    parent::__construct( 
        'showcase_widget', //Base ID
        esc_html__('Showcase Widget', 'text_domain'), //Name
        array('description' => esc_html__('A widget to display showcase content', 'text_domain'), )//Args
    );
}

/**
 * Front-end display of widget
 *
 * @param array $args
 * @param array $instance
 */
public function widget( $args, $instance ) {
    $title = apply_filters('widget_title', $instance['title']);
    $heading = $instance['heading'];
    $button_text = $instance['text'];
    $button_url = $instance['content'];
    

    echo $args['before_widget'];
    /*
    if ( ! empty( $instance['title'] ) ) {
        echo $args['before_title'] . $title . $args['after_title'];
    }
    */
    
    echo $this->getContent($title, $heading, $button_text, $button_url);
    echo $args['after_widget'];
}

public function getContent($title, $heading, $button_text, $button_url){
    $output = '<h1>' . $title . '</h1><p>' . $heading . '</p><a href="' . esc_url( $button_url ) . '" class="button">' . $button_text . '</a>';

    //Return Output String
    return $output;
}

/**
 * Back-end widget form
 *
 * @param array $instance The widget options
 */
public function form( $instance ) {
    // outputs the options form on admin
    $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Showcase Widget', 'text_domain' );
    $heading = $instance['heading'];
    $button_text = $instance['text'];
    $button_url = $instance['content'];

    ?>

    <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Headline:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
	</p>
    <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'heading' ) ); ?>"><?php esc_attr_e( 'Text:', 'text_domain' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'heading' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'heading' ) ); ?>" type="text" value="<?php echo esc_attr( $heading ); ?>">
    </p>
    <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php esc_attr_e( 'Button Text:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" value="<?php echo esc_attr( $button_text ); ?>">
	</p>
    <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>"><?php esc_attr_e( 'Button URL:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'content' ) ); ?>" type="text" value="<?php echo esc_attr( $button_url ); ?>">
	</p>

    <?php
}

/**
 * Processing widget options on save
 *
 * @param array $new_instance The new options
 * @param array $old_instance The previous options
 *
 * @return array
 */
public function update( $new_instance, $old_instance ) {
    // processes widget options to be saved
    $instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['heading'] = ( ! empty( $new_instance['heading'] ) ) ? sanitize_text_field( $new_instance['heading'] ) : '';
		$instance['text'] = ( ! empty( $new_instance['text'] ) ) ? sanitize_text_field( $new_instance['text'] ) : '';
		$instance['content'] = ( ! empty( $new_instance['content'] ) ) ? sanitize_text_field( $new_instance['content'] ) : '';

    return $instance;
}
}
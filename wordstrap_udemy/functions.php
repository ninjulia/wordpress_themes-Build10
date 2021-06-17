<?php
//bring in nav walker
require_once('wp_bootstrap_navwalker.php');

//bring in custom categories, posts, comments
require_once('widgets/class-wp-widget-categories.php');
require_once('widgets/class-wp-widget-recent-comments.php');
require_once('widgets/class-wp-widget-recent-posts.php');

//theme setup
function wordstrap_theme_setup(){

    //Thumbnail support
    add_theme_support('post_thumbnails');

    //Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

}

add_action('after_setup_theme', 'wordstrap_theme_setup');

//Widget Locations
function wordstrap_init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="panel panel-default">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="panel-heading"><h3 class="panel-title">',
        'after_title' => '</h3></div><div class="panel-body">'
    ));
}

add_action('widgets_init', 'wordstrap_init_widgets');

//adds 'list-group-item' to categories li
function wordstrap_add_new_classlist_cat($list){
    $list = str_replace('cat-item', 'cat-item list-group-item', $list);
    return $list;
}

add_filter('wp_list_categories', 'wordstrap_add_new_classlist_cat');

//Register Widgets
function wordstrap_register_widgets(){
    register_widget('WP_Widget_Categories_Custom');
    register_widget('WP_Widget_Recent_Comments_Custom');
    register_widget('WP_Widget_Recent_Posts_Custom');
}

add_action('widgets_init', 'wordstrap_register_widgets');

// Add Comments
function add_theme_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li class="well comment-item"';
		$add_below = 'div-comment';
	}
?>


//reference https://developer.wordpress.org/reference/functions/wp_list_comments/
<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>

	<div class="col-md-2">
		<div class="comment-author vcard">
			<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
			<?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
		</div>
	</div>

	<div class="col-md-10">
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
			?>
		</div>

		<?php comment_text(); ?>

		<div class="reply">
		<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
	</div>

	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php
}
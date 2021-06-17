<h2>Comments</h2>
<?php
    //pulled from wp codex for wp_list_comments(): (https://developer.wordpress.org/reference/functions/wp_list_comments/)
    $args = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'ul',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 80,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
        'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
    );
 ?>
<?php wp_list_comments( $args, $comments ); ?>
<?php
  $form_args = array(
    //change title of send button
    'label_submit' => 'Send',
    //change the title of reply section
    'title_reply' => 'Write a Reply or Comment',
    //remove "text or HTML to be displayed after the set of comment fields"
    'comment_notes_after' => '',
    //redefine your own text area (the comment body)
    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment' , 'noun') . '</label><br /><textarea id="comment" name="comment" cols="40" rows="8" aria-required="true"></textarea></p>',
  );
  comment_form($form_args);
?>

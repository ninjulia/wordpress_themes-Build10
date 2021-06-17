<?php get_header(); ?>

  <div class="container content">
    <?php if(is_active_sidebar( 'showcase' )) : ?>
      <?php dynamic_sidebar( 'showcase' ); ?>
    <?php endif; ?>
      <div class="block">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <article class="page">
              <?php
              //code from wp codex for displaying nav on child pages (https://developer.wordpress.org/reference/functions/wp_list_pages/)
                if ( $post->post_parent ) {
                    $children = wp_list_pages( array(
                        'title_li' => '',
                        'child_of' => $post->post_parent,
                        'echo'     => 0
                    ) );
                } else {
                    $children = wp_list_pages( array(
                        'title_li' => '',
                        'child_of' => $post->ID,
                        'echo'     => 0
                    ) );
                }
                if ( $children ) : ?>
                <nav class="nav sub-nav">
                  <ul>
                    <span class="parent-link">
                      <a href="<?php echo get_the_permalink(get_top_parent()); ?>">
                        <?php echo get_the_title( get_top_parent() ); ?>
                      </a>
                    </span>
                      <?php echo $children; ?>
                  </ul>
                </nav>
                <?php endif; ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>
          <?php endwhile; ?>
      <?php else : ?>
        <article>
          <?php echo wpautop( 'Sorry, no posts were found' ); ?>
        </article>
      <?php endif; ?>
      </div>
      <?php if(is_active_sidebar( 'box1' )) : ?>
        <?php dynamic_sidebar( 'box1' ); ?>
      <?php endif; ?>
      <?php if(is_active_sidebar( 'box2' )) : ?>
        <?php dynamic_sidebar( 'box2' ); ?>
      <?php endif; ?>
      <?php if(is_active_sidebar( 'box3' )) : ?>
        <?php dynamic_sidebar( 'box3' ); ?>
      <?php endif; ?>
  </div>
<?php get_footer(); ?>

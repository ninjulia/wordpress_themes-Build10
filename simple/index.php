<?php get_header(); ?>

  <main>
    <div class="container">
      <div class="content">
      <!-- get posts-->
      <?php if(have_posts()) : ?>
        <?php while(have_posts()): the_post(); ?>
          <article class="post">
            <h3>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
              </h3>
            <div class="meta">
                Created by <a href="<?php get_author_posts_url( get_the_author_meta( 'ID') ); ?>"><?php the_author(); ?></a> on <?php the_time('F j, Y g:i a'); ?>
            </div>
            <?php if(has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                  <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
            <?php the_excerpt(); ?>
            <br />
            <a class="button" href="<?php the_permalink(); ?>">Read More &raquo;&raquo;</a>
        </article>
        <?php endwhile; ?>
      <?php else : ?>
        <article class="post">
        <?php echo wpautop('Sorry, no posts were found.'); ?>
        </article>
      <?php endif; ?>
    </div>
    <div class="sidebar">
        <?php if(is_active_sidebar('Sidebar')) : ?>
          <?php dynamic_sidebar('Sidebar'); ?>
        <?php endif; ?>
    </div>
    </div>
  </main>
<?php get_footer(); ?>

<?php get_header(); ?>

  <main>
    <div class="container">
      <div class="content">
      <!-- get posts-->
      <?php if(have_posts()) : ?>
      <?php while(have_posts()): the_post(); ?>
        <article class="post">
          <h3><?php the_title(); ?></h3>
          <div class="meta">
              Created by <a href="<?php get_author_posts_url( get_the_author_meta( 'ID') ); ?>"><?php the_author(); ?></a> on <?php the_time('F j, Y g:i a'); ?>
          </div>
          <?php if(has_post_thumbnail()) : ?>
              <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
              </div>
          <?php endif; ?>
          <?php the_content(); ?>
      </article>
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo wpautop('Sorry, no posts were found.'); ?>
    <?php endif; ?>
    <?php comments_template(); ?>
  </div>
  <div class="sidebar">
      <?php if(is_active_sidebar('Sidebar')) : ?>
        <?php dynamic_sidebar('Sidebar'); ?>
      <?php endif; ?>
  </div>
  </div>
</main>
<?php get_footer(); ?>

<?php get_header(); ?>

  <main>
    <div class="container">
      <div class="content">
      <!-- get posts-->
      <?php if(have_posts()) : ?>
      <?php while(have_posts()): the_post(); ?>
        <article class="post">
          <h3><?php the_title(); ?></h3>
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
    </div>
    <div class="sidebar">
        <?php if(is_active_sidebar('Sidebar')) : ?>
          <?php dynamic_sidebar('Sidebar'); ?>
        <?php endif; ?>
    </div>
    </div>
  </main>
<?php get_footer(); ?>
